{{csrf_field()}}
<input type="hidden" name="client_type" value="{{$clientType}}">
<div class="form-group">
    {{Form::label('name','Nome')}}
    {{Form::text('name',null,['class' => 'form-control']) }}
<!--<label for="name">Nome</label>-->
<!--<input class="form-control" id="name" name="name" value="{{old('name',$client->name)}}">-->
</div>

<div class="form-group">
    <!--<label for="document_number">Documento</label>-->
    {{--<input class="form-control" id="document_number" name="document_number" value="{{old('document_number',$client->document_number)}}">--}}
    {{Form::label('document_number', 'Documento')}}
    {{Form::text('document_number',null,['class' => 'form-control'] )}}
</div>

<div class="form-group">
    {{--<label for="e-mail">E-mail</label>
    <input class="form-control" id="email" name="email" type="email" value="{{old('email',$client->email)}}">--}}
    {{Form::label('email', 'E-mail')}}
    {{Form::text('email',null,['class' => 'form-control'] )}}
</div>

<div class="form-group">
    {{--<label for="phone">Telefone</label>
    <input class="form-control" id="phone" name="phone" value="{{old('phone',$client->phone)}}">--}}
    {{Form::label('phone','Telefone')}}
    {{Form::text('phone',null,['class' => 'form-control'])}}
</div>
@if($clientType == \App\Client::TYPE_INDIVIDUAL)

    @php
        $maritalStatus = $client->marital_status;
    @endphp
    <div class="form-group">
        {{--
        <label for="marital_status">Estado Civil</label>
        <select class="form-control" name="marital_status" id="marital_status" value="{{$maritalStatus}}">
            <option value="">Selecione o estado civil</option>
            <option value="1"{{old('marital_status',$maritalStatus) == 1 ? 'selected="selected"': ''}} >Solteiro</option>
            <option value="2"{{old('marital_status',$maritalStatus) == 2 ? 'selected="selected"': ''}}>Casado</option>
            <option value="3"{{old('marital_status',$maritalStatus) == 3 ? 'selected="selected"': ''}}>Divorciado</option>
        </select>--}}
        {{Form::label('marital_status', 'Estado Civil')}}
        {{
            Form::select('marital_status', [
                '' => 'Selecione o estado civil',
                1 => 'Solteiro',
                2 => 'Casado',
                3 => 'Divorciado'
            ],null,['class' => 'form-control'])
        }}
    </div>
    <div class="form-group">
        {{Form::label('date_birth','Data Nasc.')}}
        {{Form::text('date_birth',null,['class' => 'form-control'])}}
    </div>
    @php
        $sex = $client->sex;
    @endphp
    <div class="radio">
        <label>
            {{Form::radio('sex','m')}} Masculino
        </label>
    </div>
    <div class="radio">
        <label>
            {{Form::radio('sex','f')}} Feminino
        </label>
    </div>
    <div class="form-group">
        {{Form::label('physical_disability','Deficiência Física')}}
        {{Form::text('physical_disability',null,['class' => 'form-control'])}}
    </div>
@else
    <div class="form-group">
        {{Form::label('company_name','Nome Fantasia')}}
        {{Form::text('company_name',null,['class' => 'form-control']) }}
         </div>
@endif
<div class="checkbox">
    <label>
        {{Form::checkbox('defaulter',1)}} Inadimplente
    </label>
</div>