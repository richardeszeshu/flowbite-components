<?php

namespace RichardEszes\FlowbiteComponents\Views\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string|null $id = null,
        public string|null $label = null,
        public string|null $placeholder = null,
        public bool $required = false,
        public bool $readonly = false,
        public bool $disabled = false,
        public string|null $value = null,
        public float|null $maxlength = null,
        public int|null $rows = 4,
        public string|null $name = null,
        public bool $autofocus = false,
        public string|null $form = null,
        public string|null $helperText = null,
        public bool $disableVerificationMarkers = false,
        public bool $verificationSuccess = false
        ) {}

    public function getId()
    {
        if (!$this->id) {
            $this->id = 'input-' . Str::random();
        }

        return $this->id;
    }

    public function getName()
    {
        if (!$this->name) {
            $this->name = 'input-' . Str::random();
        }

        return $this->name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('flowbite::tailwind.components.form.textarea');
    }
}
