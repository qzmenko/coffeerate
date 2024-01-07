import './bootstrap';
import 'flowbite';

document.addEventListener('livewire:navigated', () => {
    // Re-initialize Flowbite after livewire navigation.
    initFlowbite();
})
