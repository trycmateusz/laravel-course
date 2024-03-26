@include('components.input-with-label.base', [
'errorName' => 'email',
'label' => __('Email address'),
'name' => 'email',
'type' => 'email',
'value' => old('email')
])