<div class="mb-6">
    @if($label)
        <label for="{{ $getId() }}" @class([
            "block",
            "mb-2",
            "text-sm",
            "font-medium",
            "text-gray-900" => !$verificationSuccess || $disableVerificationMarkers,
            "dark:text-gray-300" => !$verificationSuccess || $disableVerificationMarkers,
            "text-green-700" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "dark:text-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "text-red-700" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "dark:text-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName())
            ])>{{ $label }}</label>
    @endif
    <input 
        id="{{ $getId() }}" 
        name="{{ $getName() }}"
        type="{{  $type }}" 
        value="{{ $value }}"
        @if($type == 'number')
            @if($max) max="{{ $max }}" @endif
            @if($min) min="{{ $min }}" @endif
            @if($step) step="{{ $step }}" @endif
        @else
            @if($maxlength) maxlength="{{ $maxlength }}" @endif
            @if($minlength) minlength="{{ $minlength }}" @endif
        @endif
        @if($pattern) pattern="{{ $pattern }}" @endif
        @class([
            "bg-gray-50" => !$disabled,
            "bg-gray-100" => $disabled,
            "bg-green-50" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "bg-red-50" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "cursor-not-allowed" => $disabled,
            "border",
            "border-gray-300" => !$verificationSuccess || $disableVerificationMarkers,
            "border-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "border-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "text-gray-900" => !$verificationSuccess || $disableVerificationMarkers,
            "text-green-900" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "text-red-900" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "placeholder-green-700" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "placeholder-red-700" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "sm:text-xs" => $getSize() == 'S',
            "text-sm" => $getSize() == 'M',
            "sm:text-md" => $getSize() == 'L',
            "rounded-lg",
            "focus:ring-blue-500" => !$verificationSuccess || $disableVerificationMarkers,
            "focus:border-blue-500" => !$verificationSuccess || $disableVerificationMarkers,
            "focus:ring-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "focus:border-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "focus:ring-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "focus:border-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "block",
            "w-full",
            "p-2" => $getSize() == 'S',
            "p-2.5" => $getSize() == 'M',
            "p-4" => $getSize() == 'L',
            "dark:bg-gray-700",
            "dark:border-gray-600" => !$verificationSuccess || $disableVerificationMarkers,
            "dark:border-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "dark:border-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "dark:placeholder-gray-400" => !$verificationSuccess || $disableVerificationMarkers,
            "dark:placeholder-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "dark:placeholder-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "dark:text-white" => !$disabled,
            "dark:text-gray-400" => $disabled,
            "dark:text-green-400" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "dark:text-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "dark:focus:ring-blue-500" => !$verificationSuccess || $disableVerificationMarkers,
            "dark:focus:border-blue-500" => !$verificationSuccess || $disableVerificationMarkers,
        ])
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($autofocus) autofocus @endif
        @if($form) form="{{ $form }}" @endif
        @required($required)
        @readonly($readonly)
        @disabled($disabled)>
    @if($helperText)
        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
            {{ $helperText }}
        </p>
    @endif
    @error($getName())
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>