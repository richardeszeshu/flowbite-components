<div class="mb-6">
    @if($label)
        <label for="{{ $getId() }}"
            @class([
                "block",
                "mb-2",
                "text-sm",
                "font-medium",
                "text-gray-900",
                "dark:text-gray-400"
            ])
        >{{ $label }}</label>
    @endif
    <textarea 
        id="{{ $getId() }}"
        name="{{ $getName() }}"
        rows="{{  $rows }}" 
        @class([
            "block",
            "p-2.5",
            "w-full",
            "text-sm",
            "text-gray-900" => !$verificationSuccess || $disableVerificationMarkers,
            "text-green-900" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "text-red-900" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "bg-gray-50" => !$disabled,
            "bg-gray-100" => $disabled,
            "bg-green-50" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "bg-red-50" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "rounded-lg",
            "border",
            "border-gray-300" => !$verificationSuccess || $disableVerificationMarkers,
            "border-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "border-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "focus:ring-blue-500" => !$verificationSuccess || $disableVerificationMarkers,
            "focus:border-blue-500" => !$verificationSuccess || $disableVerificationMarkers,
            "focus:ring-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "focus:border-green-500" => $verificationSuccess && !$disableVerificationMarkers && !$errors->has($getName()),
            "focus:ring-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
            "focus:border-red-500" => !$verificationSuccess && !$disableVerificationMarkers && $errors->has($getName()),
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
            "dark:focus:ring-blue-500",
            "dark:focus:border-blue-500"
        ])
        @if($maxlength) placeholder="{{ $placeholder }}" @endif
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($autofocus) autofocus @endif
        @if($form) form="{{ $form }}" @endif
        @required($required)
        @readonly($readonly)
        @disabled($disabled)
    >{{ $slot }}</textarea>
    @if($helperText)
        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
            {{ $helperText }}
        </p>
    @endif
</div>