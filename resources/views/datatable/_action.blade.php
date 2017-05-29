{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm'] ) !!}
	<a href="{{ $edit_url }}">Ubah</a> |
	{!! Form::submit('Hapus', ['class'=>'btn btn-xs btn-danger']) !!}
{!! Form::close()!!}