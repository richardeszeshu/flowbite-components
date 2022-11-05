<?php

namespace RichardEszes\FlowbiteComponents\Views\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string|null $id = null,
        public string|null $label = null,
        public string $type = 'text',
        public string|null $placeholder = null,
        public bool $required = false,
        public bool $readonly = false,
        public bool $disabled = false,
        public string|null $value = null,
        public float|null $maxlength = null,
        public float|null $minlength = null,
        public string|null $name = null,
        public string|null $pattern = null,
        public string|null $step = null,
        public float|null $max = null,
        public float|null $min = null,
        public bool $autofocus = false,
        public string|null $form = null,
        public string $size = 'M',
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

    public function getSize()
    {
        if (in_array($this->size, ['S', 'M', 'L'])) {
            return $this->size;
        }

        return 'M';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('flowbite::tailwind.components.form.input');
    }
}
