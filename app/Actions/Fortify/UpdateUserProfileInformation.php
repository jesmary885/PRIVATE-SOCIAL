<?php

namespace App\Actions\Fortify;

use App\Models\Pais;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     * 
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     * 
     * 
     * 
     */



    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

      /*  if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {*/
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'genero' => $input['genero'],
                'pais_id' => $input['pais_id'],
            ])->save();
       // }
    }




     
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'genero' => $input['genero'],
            'pais_id' => $input['pais_id'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
