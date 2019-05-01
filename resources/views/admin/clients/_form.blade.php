{{Form::hidden('client_type',$clientType)}}

@component('form._form_group',['field' => 'name'])
    {{Form::label('name','Nome',['class' => 'control-label']) }}
    {{Form::text('name',null,['class' => 'form-control']) }}
    <!--<label for="name">Nome</label>-->
    <!--<input class="form-control" id="name" name="name" value="{{old('name',$client->name)}}">-->
@endcomponent

@component('form._form_group',['field' => 'document_number'])
    <!--<label for="document_number">Documento</label>-->
    {{--<input class="form-control" id="document_number" name="document_number" value="{{old('document_number',$client->document_number)}}">--}}
    {{Form::label('document_number', 'Documento',['class' => 'control-label'])}}
    {{Form::text('document_number',null,['class' => 'form-control'] )}}
@endcomponent

@component('form._form_group',['field' => 'email'])
    {{--<label for="e-mail">E-mail</label>
    <input class="form-control" id="email" name="email" type="email" value="{{old('email',$client->email)}}">--}}
    {{Form::label('email', 'E-mail',['class' => 'control-label'])}}
    {{Form::text('email',null,['class' => 'form-control'] )}}
@endcomponent

@component('form._form_group',['field' => 'phone'])
    {{--<label for="phone">Telefone</label>
    <input class="form-control" id="phone" name="phone" value="{{old('phone',$client->phone)}}">--}}
    {{Form::label('phone','Telefone',['class' => 'control-label'])}}
    {{Form::text('phone',null,['class' => 'form-control'])}}
@endcomponent
    @if($clientType == \App\Client::TYPE_INDIVIDUAL)
        @component('form._form_group',['field' => 'marital_status'])

    {{--
    <label for="marital_status">Estado Civil</label>
    <select class="form-control" name="marital_status" id="marital_status" value="{{$maritalStatus}}">
        <option value="">Selecione o estado civil</option>
        <option value="1"{{old('marital_status',$maritalStatus) == 1 ? 'selected="selected"': ''}} >Solteiro</option>
        <option value="2"{{old('marital_status',$maritalStatus) == 2 ? 'selected="selected"': ''}}>Casado</option>
        <option value="3"{{old('marital_status',$maritalStatus) == 3 ? 'selected="selected"': ''}}>Divorciado</option>
    </select>--}}
        {{Form::label('marital_status', 'Estado Civil',['class' => 'control-label'])}}
        {{
            Form::select('marital_status', [
                '' => 'Selecione o estado civil',
                1 => 'Solteiro',
                2 => 'Casado',
                3 => 'Divorciado'
            ],null,['class' => 'form-control'])
        }}
    @endcomponent
    @component('form._form_group',['field' => 'date_birth'])
        {{Form::label('date_birth','Data Nasc.',['class' => 'control-label'])}}
        {{Form::text('date_birth',null,['class' => 'form-control'])}}
    @endcomponent
    @php
        $sex = $client->sex;
    @endphp
    <div class="radio {{$errors->has('sex')?' has-error':''}}">
        <label>
            {{Form::radio('sex','m')}} Masculino
        </label>
    </div>
    <div class="radio {{$errors->has('sex')?' has-error':''}}">
        <label>
            {{Form::radio('sex','f')}} Feminino
        </label>
    </div>
    <div class="{{$errors->has('sex')?' has-error':''}}">
    @include('form._help_block',['field' => 'sex'])
    </div>
    @component('form._form_group',['field' => 'physical_disability'])
        {{Form::label('physical_disability','Deficiência Física',['class' => 'control-label'])}}
        {{Form::text('physical_disability',null,['class' => 'form-control'])}}
    @endcomponent
@else
    @component('form._form_group',['field' => 'company_name'])
        {{Form::label('company_name','Nome Fantasia',['class' => 'control-label'])}}
        {{Form::text('company_name',null,['class' => 'form-control']) }}
    @endcomponent
@endif
<div class="checkbox">
    <label>
        {{Form::checkbox('defaulter',1)}} Inadimplente
    </label>
</div>