@extends('layouts.app')

@section('contenido')

    <div class="container bg-white p-5 rounded-md">
        <div>
            <h1 class="border-b text-lg">Registrarse</h1>
        </div>
        <form action="/sustentante/registrarse" method="POST" class="space-y-8" enctype="multipart/form-data">
            @csrf
            <div class="mb-5 md:w-4/12">
                <label for="entidad" class="font-bold text-sm pb-2">Entidad federativa</label>
                <select name="entidad" id="entidad" class="w-full bg-white px-4 py-2 text-gray-500 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('entidad')
                   border border-red-500
                @enderror" value="{{old('entidad')}}">
                    <option value="">Selecciona una opción</option>
                    @foreach ($estados as $estado)
                        <option value="{{$estado->id}}">{{$estado->entidad}}</option>
                    @endforeach
                </select>
                @error('entidad')
                    <p class="my-2 text-red-500">{{$message}}</p>
                @enderror
            </div>
            <fieldset class="border p-5">
                <legend>Datos generales del solicitante</legend>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="">
                        <label for="nombre" class="block font-bold text-sm pb-2">Nombre(s)</label>
                        <input type="text" name="nombre" id="nombre" class="w-full border px-2 py-2 rounded-md 
                        @error('nombre')
                         border-red-500
                        @enderror" 
                        value="{{old('nombre')}}" placeholder="Introduce el nombre">
                        @error('nombre')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="primerApellido" class="block font-bold text-sm pb-2">Primer Apellido</label>
                        <input type="text" name="primerApellido" id="primerApellido" class="w-full border px-2 py-2 rounded-md
                        @error('primerApellido')
                            border-red-500
                        @enderror" value="{{old('primerApellido')}}" placeholder="Introduce el primer apellido">
                        @error('primerApellido')
                        <p class="my-2 text-red-500">{{$message}}</p>
                    @enderror
                    </div>

                    <div class="">
                        <label for="segundoApellido" class="block font-bold text-sm pb-2">Segundo Apellido</label>
                        <input type="text" name="segundoApellido" id="segundoApellido" class="w-full border px-2 py-2 rounded-md
                        @error('segundoApellido')
                            border-red-500
                        @enderror" value="{{old('segundoApellido')}}" placeholder="Introduce el segundo apellido">
                        @error('segundoApellido')
                        <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                        
                    </div>
                    <div class="">
                        <label for="curp" class="block font-bold text-sm pb-2">CURP</label>
                        <input type="text" name="curp" id="curp" class="w-full border px-2 py-2 rounded-md
                        @error('curp')
                            border-red-500
                        @enderror" value="{{old('curp')}}" placeholder="Introduce el curp">
                        @error('curp')
                        <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                        
                    </div>
                    <div class="">
                        <label for="fechaNacimiento" class="block font-bold text-sm pb-2">Fecha de nacimiento</label>
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="w-full border px-2 py-2 rounded-md
                        @error('fechaNacimiento')
                            border-red-500
                        @enderror" value="{{old('fechaNacimiento')}}">
                        @error('fechaNacimiento')
                        <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                        
                    </div>
                    <div class="">
                        <label for="sexo" class="block font-bold text-sm pb-2">Sexo</label>
                        <select name="sexo" id="sexo" class="block w-full bg-transparent border-0 border-b-2 px-0 py-2.5 text-gray-500 border-gray-200
                        @error('sexo')
                            border-1 border-red-500
                        @enderror" value={{old('sexo')}}>
                            <option value="">Selecciona una opción</option>
                            @foreach ($sexos as $sexo)
                                <option value="{{$sexo->id}}">{{$sexo->sexo}}</option>
                            @endforeach
                        </select>
                        @error('sexo')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="nacionalidad" class="block font-bold text-sm pb-2">Nacionalidad</label>
                        <input type="text" name="nacionalidad" id="nacionalidad" class="w-full border px-2 py-2 rounded-md
                        @error('nacionalidad')
                            border-red-500
                        @enderror" value="{{old('nacionalidad')}}" placeholder="Introduce la nacionalidad">
                        @error('nacionalidad')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="lugarNacimiento" class="block font-bold text-sm pb-2">Lugar de nacimiento</label>
                        <input type="text" name="lugarNacimiento" id="lugarNacimiento" class="w-full border px-2 py-2 rounded-md
                        @error('lugarNacimiento')
                            border-red-500
                        @enderror" value="{{old('lugarNacimiento')}}" placeholder="Introduce el lugar de nacimiento">
                        @error('lugarNacimiento')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Domicilio</legend>
                <div class="pb-5">
                    <label for="calleNumero" class="block font-bold text-sm pb-2">Calle y número</label>
                        <input type="text" name="calleNumero" id="calleNumero" class="w-full border px-2 py-2 rounded-md
                        @error('calleNumero')
                            border-red-500
                        @enderror" value="{{old('calleNumero')}}" placeholder="Introduce la calle y número">
                        @error('calleNumero')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="">
                        <label for="colonia" class="block font-bold text-sm pb-2">Colonia</label>
                        <input type="text" name="colonia" id="colonia" class="w-full border px-2 py-2 rounded-md
                        @error('colonia')
                            border-red-500
                        @enderror" value="{{old('colonia')}}" placeholder="Introduce la colonia">
                        @error('colonia')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="codigoPostal" class="block font-bold text-sm pb-2">Código Postal</label>
                        <input type="text" name="codigoPostal" id="codigoPostal" class="w-full border px-2 py-2 rounded-md
                        @error('codigoPostal')
                            border-red-500
                        @enderror" value="{{old('codigoPostal')}}" placeholder="Introduce el codigo postal">
                        @error('codigoPostal')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="municipio" class="block font-bold text-sm pb-2">Delegación/Municipio</label>
                        <input type="text" name="municipio" id="municipio" class="w-full border px-2 py-2 rounded-md
                        @error('municipio')
                            border-red-500
                        @enderror" value="{{old('municipio')}}" placeholder="Introduce la Delegación/Municipio">
                        @error('municipio')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="estadoRadica" class="block font-bold text-sm pb-2">Entidad federativa donde radica</label>
                        <select name="estadoRadica" id="estadoRadica" class="block w-full bg-transparent border-0 border-b-2 px-0 
                        py-2.5 text-gray-500 border-gray-200" value={{old('estadoRadica')}}>
                            <option value="">Selecciona una opción</option>
                            @foreach ($estados as $estado)
                                <option value="{{$estado->id}}">{{$estado->entidad}}</option>
                            @endforeach
                        </select>
                        @error('estadoRadica')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Teléfonos</legend>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="">
                        <label for="telefonoCasa" class="block font-bold text-sm pb-2">Teléfono de casa</label>
                        <input type="tel" name="telefonoCasa" id="telefonoCasa" class="w-full border px-2 py-2 rounded-md" 
                        placeholder="Introduce teléfono de casa" value="{{old('telefonoCasa')}}">
                    </div>
                    <div class="">
                        <label for="telefonoOficina" class="block font-bold text-sm pb-2">Teléfono de oficina</label>
                        <input type="tel" name="telefonoOficina" id="telefonoOficina" class="w-full border px-2 py-2 rounded-md" 
                        placeholder="Introduce teléfono de oficina" value="{{old('telefonoOficina')}}">
                    </div>
                    <div class="">
                        <label for="celular" class="block font-bold text-sm pb-2">Celular</label>
                        <input type="tel" name="celular" id="celular" class="w-full border px-2 py-2 rounded-md
                        @error('celular')
                            border-red-500
                        @enderror" placeholder="Introduce teléfono celular" value="{{old('celular')}}">
                        @error('celular')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Perfil profesional que desea acreditar</legend>
                <div class="grid grid-cols-1 gap-6">
                    <div class="">
                        <label for="sede" class="block font-bold text-sm pb-2">Sede</label>
                        <select name="sede" id="sede" class="block w-full bg-transparent border-0 border-b-2 
                        px-0 py-2.5 text-gray-500 border-gray-200 
                        @error('sede')
                            border-1 border-red-500
                        @enderror" value={{old('sede')}}>
                            <option value="">Selecciona una opción</option>
                            @foreach ($sedes as $sede)
                                <option value="{{$sede->id}}">{{$sede->sede}}</option>
                            @endforeach
                        </select>
                        @error('sede')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="nivelEducativo" class="block font-bold text-sm pb-2">Nivel educativo</label>
                        <select name="nivelEducativo" id="nivelEducativo" class="block w-full bg-transparent border-0 
                        border-b-2 px-0 py-2.5 text-gray-500 border-gray-200
                        @error('nivelEducativo')
                            border-1 border-red-500
                        @enderror" value={{old('nivelEducativo')}}>
                            <option value="">Selecciona una opción</option>
                            @foreach ($nivelesEducativos as $nivelEducativo)
                                <option value="{{$nivelEducativo->id}}">{{$nivelEducativo->nivelEducativo}}</option>
                            @endforeach
                        </select>
                        @error('nivelEducativo')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="areaConocimiento" class="block font-bold text-sm pb-2">Área de conocimiento</label>
                        <select name="areaConocimiento" id="areaConocimiento" class="block w-full bg-transparent border-0 border-b-2 
                        px-0 py-2.5 text-gray-500 border-gray-200" value="{{old('areaConocimiento')}}" disabled value={{old('areaConocimiento')}}>
                            <option selected>Selecciona una opción</option>
                            @foreach ($areasConocimiento as $areaConocimiento)
                                <option value="{{$areaConocimiento->id}}">{{$areaConocimiento->areaConocimiento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="perfilProfesional" class="block font-bold text-sm pb-2">Perfil profesional</label>
                        <select name="perfilProfesional" id="perfilProfesional" class="block w-full bg-transparent border-0 border-b-2 
                        px-0 py-2.5 text-gray-500 border-gray-200" value="{{old('perfilProfesional')}}" @disabled(true) value={{old('perfilProfesional')}}>
                            <option selected>Selecciona una opción</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Información para licenciatura</legend>
                <div class="grid grid-cols-1 gap-6">
                    <div class="">
                        <label for="institucion" class="block font-bold text-sm pb-2">Institución educativa donde realizó los estudios que desea acreditar</label>
                        <input type="text" name="institucion" id="institucion" class="w-full border px-2 py-2 rounded-md" 
                        placeholder="Introduce la institución" value="{{old('institucion')}}" disabled>
                    </div>
                    <div class="">
                        <label for="porcentajeCreditosObtenidos" class="block font-bold text-sm pb-2">Porcentaje de créditos en la carrera o licenciatura cursada</label>
                        <input type="text" name="porcentajeCreditosObtenidos" id="porcentajeCreditosObtenidos" class="w-full border px-2 py-2 rounded-md" 
                        placeholder="Introduce el porcentaje" value="{{old('porcentajeCreditosObtenidos')}}" disabled>
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Motivo por el que no concluyó sus estudios o no se tituló</legend>
                <div class="grid grid-cols-1 gap-6">
                    <div class="">
                        <label for="motivoNoConcluyo" class="block font-bold text-sm pb-2">Motivo por el cual no concluyo sus estudios o no se tituló</label>
                        <select name="motivoNoConcluyo" id="motivoNoConcluyo" class="block w-full bg-transparent border-0 border-b-2 
                        px-0 py-2.5 text-gray-500 border-gray-200" value="old('motivoNoConcluyo')">
                            <option selected>Selecciona una opción</option>
                            @foreach ($motivosNoConcluyo as $motivo)
                                <option value="{{$motivo->id}}">{{$motivo->motivoNoConcluyo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="porcentajeCreditoCarreraCursada" class="block font-bold text-sm pb-2">Porcentaje de créditos en la carrera o licenciatura cursada</label>
                        <input type="text" name="porcentajeCreditoCarreraCursada" id="porcentajeCreditoCarreraCursada" class="w-full border px-2 py-2 rounded-md" 
                        placeholder="Introduce el codigo postal" value="{{old('porcentajeCreditoCarreraCursada')}}">
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Antecedente académico</legend>
                <div class="grid grid-cols-1 gap-6">
                    <div class="">
                        <label for="antecedenteAcademico" class="block font-bold text-sm pb-2">Antecedente académico</label>
                        <select name="antecedenteAcademico" id="antecedenteAcademico" class="block w-full bg-transparent 
                        border-0 border-b-2 px-0 py-2.5 text-gray-500 border-gray-200
                        @error('antecedenteAcademico')
                           border-1 border-red-500
                        @enderror" value="{{old('antecedenteAcademico')}}">
                            <option selected>Selecciona una opción</option>
                            @foreach ($antecedentes as $antecedente)
                                <option value="{{$antecedente->id}}">{{$antecedente->antecedenteAcademico}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="nombreLicenciatura" class="block font-bold text-sm pb-2">Licenciatura en</label>
                        <input type="text" name="nombreLicenciatura" id="nombreLicenciatura" class="w-full border px-2 py-2 rounded-md" 
                        placeholder="Introduce la licenciatura" value="{{old('nombreLicenciatura')}}">
                    </div>
                    <div class="">
                        <label for="porcentajeAvanceCreditos" class="block font-bold text-sm pb-2">Prcentaje de avance de créditos obtenidos</label>
                        <input type="text" name="porcentajeAvanceCreditos" id="porcentajeAvanceCreditos" class="w-full border px-2 py-2 rounded-md" 
                        placeholder="Introduce el porcentaje" value="{{old('porcentajeAvanceCreditos')}}">
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Documentación</legend>
                <div class="grid grid-cols-2 gap-6">
                    <div class="">
                        <label for="archivoActa" class="block font-bold text-sm pb-2">Archivo acta de nacimiento</label>
                        <input type="file" name="archivoActa" id="archivoActa">
                        @error('archivoActa')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="archivoCurp" class="block font-bold text-sm pb-2">Archivo CURP</label>
                        <input type="file" name="archivoCurp" id="archivoCurp">
                        @error('archivoCurp')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="archivoIne" class="block font-bold text-sm pb-2">Archivo INE</label>
                        <input type="file" name="archivoIne" id="archivoIne">
                        @error('archivoIne')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="archivoCertificado" class="block font-bold text-sm pb-2">Archivo Certificado</label>
                        <input type="file" name="archivoCertificado" id="archivoCertificado">
                        @error('archivoCertificado')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="archivoAntecedentesSecundaria" class="block font-bold text-sm pb-2">Archivo antecedente secundaria</label>
                        <input type="file" name="archivoAntecedentesSecundaria" id="archivoAntecedentesSecundaria">
                    </div>
                    <div class="">
                        <label for="archivoCurriculum" class="block font-bold text-sm pb-2">Archivo curriculum</label>
                        <input type="file" name="archivoCurriculum" id="archivoCurriculum">
                    </div>
                    <div class="">
                        <label for="archivoDocumentoUltimoGradoEstudios" class="block font-bold text-sm pb-2">Archivo último grado de estudios</label>
                        <input type="file" name="archivoDocumentoUltimoGradoEstudios" id="archivoDocumentoUltimoGradoEstudios">
                    </div>
                    <div class="">
                        <label for="archivoCartaAutorización" class="block font-bold text-sm pb-2">Archivo carta de autorización</label>
                        <input type="file" name="archivoCartaAutorización" id="archivoCartaAutorización">
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-5">
                <legend>Datos de acceso</legend>
                <div class="grid grid-cols-1 gap-6">
                    <div class="">
                        <label for="usuario" class="block font-bold text-sm pb-2">Usuario (Correo electrónico)</label>
                        <input type="text" name="usuario" id="usuario" class="w-full border px-2 py-2 rounded-md 
                        @error('usuario')
                            border-red-500
                        @enderror" 
                        placeholder="Introduce tu correo electrónico" value="{{old('usuario')}}">
                        @error('usuario')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="password" class="block font-bold text-sm pb-2">Contraseña</label>
                        <input type="password" name="password" id="password" class="w-full border px-2 py-2 rounded-md
                        @error('password')
                            border-red-500
                        @enderror" 
                        placeholder="Introduce tu correo electrónico">
                        @error('password')
                            <p class="my-2 text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <label for="password_confirmation" class="block font-bold text-sm pb-2">Confirma la contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border px-2 py-2 rounded-md" placeholder="Introduce tu correo electrónico">
                    </div>
                </div>
            </fieldset>
            <input type="submit" value="Registrarse" class="border px-3 py-2 bg-green-700 text-white rounded-md">
        </form>
    </div>
    <script src="{{ asset('js/sustentante/registrarse.js') }}"></script>
@endsection