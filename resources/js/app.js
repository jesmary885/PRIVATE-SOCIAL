import './bootstrap';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'
import '../../vendor/masmerise/livewire-toaster/resources/js';
 
Alpine.plugin(Clipboard)


Livewire.start()
