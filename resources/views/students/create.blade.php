@extends('templates.master')

@section('content')


    <h2>Ajouter un étudiant</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Revenir à la liste</a>
    
    

    {!! Form::open(['id' => 'dataForm', 'url' => '/students']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', null, ['placeholder' => 'Enter name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['placeholder' => 'Enter email', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('campus', 'Campus'); !!}
        {!! Form::url('campus', null, ['placeholder' => 'Enter campus url', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('mobile', 'Mobile'); !!}
        {!! Form::text('mobile', null, [ 'class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('rendezvous', 'Rendez-vous'); !!}
        {!! Form::date('rendezvous', null, ['class' => 'form-control']); !!}
    </div>
   {{-- {{ count($students) }} --}}
   <div class="form-group">
        {!! Form::label('niveau', 'Niveau'); !!}
       
    <select class="form-control m-bot15" name="niveau">
        
      <option >Terminal</option> 
      <option >Licence 1</option>  
      <option >Licence 2</option> 
      <option >Licence 3</option>  
      <option >Master 1</option>  
      <option >Master 1</option>
      <option >Doctorat</option>   

     </select>
</div>
{{-- {{ count($students) }} --}}
   <div class="form-group">
        {!! Form::label('niv', 'Dossier a fournir selon le niveau'); !!}
       
    <select class="form-control m-bot15" name="niv">
        
      <option value="5">Terminal</option> 
      <option value="6">Licence 1</option>  
      <option value="7">Licence 2</option> 
      <option value="8">Licence 3</option>  
      <option value="9">Master 1</option>  
      <option value="10">Master 1</option>
      <option value="11">Doctorat</option>   

     </select>
</div>
{{-- <div class="form-group">
        {!! Form::label('etat', 'Nombre de dossier fournis'); !!}
        {!! Form::number('etat', null, [ 'class' => 'form-control']); !!}
    </div> --}}
   {{-- <div class="form-group">
        {!! Form::label('etat', 'Etat'); !!}
        {!! Form::number('etat', null, ['class' => 'form-control']); !!}
    {<select class="form-control m-bot15" name="etat">
        
      <option value="5">Terminal</option> 
      <option value="6">Licence 1</option>  
      <option value="7">Licence 2</option> 
      <option value="8">Licence 3</option>  
      <option value="9">Master 1</option>  
      <option value="10">Master 1</option>
      <option value="11">Doctorat</option>   

     </select>  
</div>--}}

    

   
    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()