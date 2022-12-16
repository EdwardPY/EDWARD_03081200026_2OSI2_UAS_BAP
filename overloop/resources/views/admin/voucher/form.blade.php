<div class="form-group {{ $errors->has('voucher') ? 'has-error' : ''}}">
    <label for="voucher" class="control-label">{{ 'Voucher' }}</label>
    <input class="form-control" name="voucher" type="text" id="voucher" value="{{ isset($voucher->voucher) ? $voucher->voucher : ''}}" >
    {!! $errors->first('voucher', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('discount') ? 'has-error' : ''}}">
    <label for="discount" class="control-label">{{ 'Discount' }}</label>
    <input class="form-control" name="discount" type="text" id="discount" value="{{ isset($voucher->discount) ? $voucher->discount : ''}}" >
    {!! $errors->first('discount', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
