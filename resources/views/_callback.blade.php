<form class="form-inline row" action="/contacts/callback" method="post" id="callback">
  {!! csrf_field() !!}
  <div class="col-md-12 col-xs-12">
    <p class="label-title" for="phone">{{ __('messages.callback_label') }}</p>
  </div>
  <div class="col-md-4 col-xs-12">
    <input type="text" name="name" placeholder="{{ __('messages.first_name') }}" />
    @if($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="col-md-4 col-xs-12">
    <input type="text" id="phone" name="phone_number" placeholder="{{ __('messages.phone_number') }}" />
    @if($errors->has('phone_number'))
        <span class="help-block">{{ $errors->first('phone_number') }}</span>
    @endif
  </div>
  <div class="col-md-4 col-xs-12">
    <button type="submit" class="btn btn-primary">{{ __('messages.send') }}</button>  
  </div>
</form>