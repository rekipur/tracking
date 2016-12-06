<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>                

                <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>                

                <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                    {!! Form::label('password', 'Password', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>                

                <div class="form-group{{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    {!! Form::label('password_confirmation', 'Konfirmasi Password', ['class'=>'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                    
                        {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                        {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 col-md-offset-2">
                    	{!! Form::submit('Simpan', ['class'=>'btn btn-primary pull-right']) !!}
                    </div>
                </div>