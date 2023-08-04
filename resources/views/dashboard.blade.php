<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PRUEBA AVE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __("Clientes") }}</h2>
                    <div class="mb-4">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" id="openModalBtn">Nuevo</button>
                    </div>
                    <div class="fixed inset-0 z-10 hidden overflow-y-auto" id="modal">
                        <div class="flex items-center justify-center min-h-screen p-4">
                            <!-- Modal content -->
                            <div class="bg-white w-1/2 p-6 rounded-lg shadow-lg">
                                <h2 class="text-xl font-semibold mb-4">Nuevo</h2>
                                <form id="formularioUsuario">
                                    <div class="grid grid-cols-2 gap-4">
                                        <!-- Primera Columna -->
                                        <div>
                                            <!-- Campo Documento -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="documento">Documento</label>
                                                <input type="text" id="documento" name="documento" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Documento">
                                            </div>

                                            <!-- Campo Nombre -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
                                                <input type="text" id="nombre" name="nombre" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Nombre">
                                            </div>

                                            <!-- Campo Apellido -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="apellido">Apellido</label>
                                                <input type="text" id="apellido" name="apellido" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Apellido">
                                            </div>

                                            <!-- Campo Ciudad -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="ciudad">Ciudad</label>
                                                <input type="text" id="ciudad" name="ciudad" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Ciudad">
                                            </div>
                                        </div>

                                        <!-- Segunda Columna -->
                                        <div>
                                            <!-- Campo Dirección -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Dirección</label>
                                                <input type="text" id="direccion" name="direccion" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Dirección">
                                            </div>

                                            <!-- Campo Celular -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="celular">Celular</label>
                                                <input type="text" id="celular" name="celular" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Celular">
                                            </div>

                                            <!-- Campo Cédula Base64 -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="cedula_base64">Cédula Base64</label>
                                                <input type="text" id="cedula_base64" name="cedula_base64" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Cédula Base64">
                                            </div>

                                            <!-- Campo Correo -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">Correo</label>
                                                <input type="email" id="correo" name="correo" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Correo">
                                            </div>

                                            <!-- Campo Contraseña -->
                                            <div class="mb-4">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="contraseña">Contraseña</label>
                                                <input type="password" id="contraseña" name="contraseña" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500" placeholder="Contraseña">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Botones -->
                                    <div class="flex justify-end mt-4 gap-4">
                                        <button type="button" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" id="closeModalBtn">Cerrar</button>
                                        <button type="submit" class="bg-green-500 hover:bg-green-600 hover:text-white font-bold py-2 px-4 mr-2 rounded text-black" id="btnCrear">Crear</button>
                                        <button type="button" class="bg-purple-500 hover:bg-purple-600 hover:text-white font-bold py-2 px-4 mr-2 rounded text-black hidden" id="btnActualizar">Actualizar</button>
                                        <button type="hidden" class="hidden" id="idusuario"></button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <table class="w-full border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="border border-gray-200 p-2">Documento</th>
                                <th class="border border-gray-200 p-2">Nombre</th>
                                <th class="border border-gray-200 p-2">Apellido</th>
                                <th class="border border-gray-200 p-2">Ciudad</th>
                                <th class="border border-gray-200 p-2">direccion</th>
                                <th class="border border-gray-200 p-2">celular</th>
                                <th class="border border-gray-200 p-2">cedula_base64</th>
                                <th class="border border-gray-200 p-2">correo</th>
                                <th class="border border-gray-200 p-2">contraseña</th>
                                <th class="border border-gray-200 p-2">Eliminar</th>
                                <th class="border border-gray-200 p-2">Actualizar</th>
                            </tr>
                        </thead>
                        <tbody id="userTableBody">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            let datatable = [];

            function EliminarUsuario(id) {
                const user = datatable.filter(u => u.id == id)[0];
                // console.log(user);
                if (confirm("Estas seguro de eliminar?")) {

                    const urldelete = "{{ route('delete') }}";
                    fetch(urldelete, {
                            method: "POST",
                            body: JSON.stringify(user),
                            headers: {
                                'Content-Type': 'application/json',
                                Accept: 'application/json'
                            },

                        })
                        .then(res => res.json())
                        .then(res => {

                            ListaUsuarios();
                            alert(res.message);
                            modal.classList.add('hidden');
                            LimpiarFormulario();


                        })
                        .catch((error) => {
                            alert("Se ha presentado un error");
                            console.log(error);
                        });

                }


            }

            function ListaUsuarios() {
                const urllist = "{{ route('list') }}";
                console.log(urllist);
                fetch(urllist)
                    .then(response => response.json())
                    .then(data => {


                        const userTableBody = document.getElementById('userTableBody');
                        datatable = data;
                        userTableBody.innerHTML = ''; // Limpia el contenido actual de la tabla
                        let tabladata = "";
                        data.forEach(user => {
                            tabladata += `
                                <tr>
                                <td class="border border-gray-200 p-2">${user.documento}</td>
                                <td class="border border-gray-200 p-2">${user.nombre}</td>
                                <td class="border border-gray-200 p-2">${user.apellido}</td>
                                <td class="border border-gray-200 p-2">${user.ciudad}</td>
                                <td class="border border-gray-200 p-2">${user.direccion}</td>
                                <td class="border border-gray-200 p-2">${user.celular}</td>
                                <td class="border border-gray-200 p-2"><p class="truncate w-10">${user.cedula_base64}</p></td>
                                <td class="border border-gray-200 p-2"><p class="truncate w-10">${user.correo}</p></td>
                                <td class="border border-gray-200 p-2">${user.contraseña}</td>
                                <td class="border border-gray-200 p-2"><a href="#" class="text-red-600" onClick="EliminarUsuario(${user.id})" >Eliminar</a></td>
                                <td class="border border-gray-200 p-2"><a href="#" class="text-yellow-600" onClick="ClickActualizarUsuario(${user.id})">Actualizar</a></td>
                            </tr>`

                        });
                        userTableBody.innerHTML = tabladata;



                    })
            }

            function ActualizarUsuario(user) {

                const urlupdate = "{{ route('update') }}";
                fetch(urlupdate, {
                        method: "POST",
                        body: JSON.stringify(user),
                        headers: {
                            'Content-Type': 'application/json',
                            Accept: 'application/json'
                        },

                    })
                    .then(res => res.json())
                    .then(res => {

                        ListaUsuarios();
                        alert(res.mensaje);
                        modal.classList.add('hidden');
                        LimpiarFormulario();


                    })
                    .catch((error) => {
                        alert("Se ha presentado un error");
                        console.log(error);
                    });

                // console.log(user);

            }

            function LimpiarFormulario() {
                document.getElementById('documento').value = "";
                document.getElementById('nombre').value = "";
                document.getElementById('apellido').value = "";
                document.getElementById('ciudad').value = "";
                document.getElementById('direccion').value = "";
                document.getElementById('celular').value = "";
                document.getElementById('cedula_base64').value = "";
                document.getElementById('correo').value = "";
                document.getElementById('contraseña').value = "";
                document.getElementById('idusuario').value = "";
                document.getElementById('btnCrear').textContent = "Crear";


            }

            function ClickActualizarUsuario(id) {

                const user = datatable.filter(u => u.id == id)[0];

                document.getElementById('documento').value = user.documento;
                document.getElementById('nombre').value = user.nombre;
                document.getElementById('apellido').value = user.apellido;
                document.getElementById('ciudad').value = user.ciudad;
                document.getElementById('direccion').value = user.direccion;
                document.getElementById('celular').value = user.celular;
                document.getElementById('cedula_base64').value = user.cedula_base64;
                document.getElementById('correo').value = user.correo;
                document.getElementById('contraseña').value = user.contraseña;
                document.getElementById('idusuario').value = user.id;

                const modal = document.getElementById('modal');
                modal.classList.remove('hidden');
                document.getElementById('btnCrear').textContent = "Actualizar";


            }

            // Código a ejecutar cuando solo se carga el documento HTML.
            //Esto no espera hojas de estilo,imágenes y subfotogramas para terminar de cargar.
            document.addEventListener("DOMContentLoaded", function(event) {

                const openModalBtn = document.getElementById('openModalBtn');
                const closeModalBtn = document.getElementById('closeModalBtn');
                const cancelBtn = document.getElementById('cancelBtn');
                const modal = document.getElementById('modal');
                const formulario = document.getElementById('formularioUsuario');

                // Agrega un controlador de eventos para el envío del formulario





                formulario.addEventListener('submit', function(event) {
                    event.preventDefault(); // Evita el envío del formulario real

                    // Obtiene los valores de los campos del formulario
                    const id = document.getElementById('idusuario').value;
                    const documento = document.getElementById('documento').value;
                    const nombre = document.getElementById('nombre').value;
                    const apellido = document.getElementById('apellido').value;
                    const ciudad = document.getElementById('ciudad').value;
                    const direccion = document.getElementById('direccion').value;
                    const celular = document.getElementById('celular').value;
                    const cedula_base64 = document.getElementById('cedula_base64').value;
                    const correo = document.getElementById('correo').value;
                    const contraseña = document.getElementById('contraseña').value;


                    const datos = {
                        documento,
                        nombre,
                        apellido,
                        ciudad,
                        direccion,
                        celular,
                        cedula_base64,
                        correo,
                        contraseña
                    }

                    if (id) {
                        datos.id = id;
                        ActualizarUsuario(datos);
                    } else {

                        const urlcreate = "{{ route('create') }}";
                        fetch(urlcreate, {
                                method: "POST",
                                body: JSON.stringify(datos),
                                headers: {
                                    'Content-Type': 'application/json',
                                    Accept: 'application/json'
                                },

                            })
                            .then(res => res.json())
                            .then(res => {
                                console.log(res);
                                if (res.message == "Usuario Creado con Exito") {
                                    ListaUsuarios();
                                    alert(res.message);
                                    modal.classList.add('hidden');
                                    LimpiarFormulario();

                                } else {
                                    alert(res.message.error);

                                }
                            })
                            .catch((error) => {
                                alert("Se ha presentado un error");
                                console.log(error);
                            });
                    }

                });

                openModalBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });

                closeModalBtn.addEventListener('click', () => {
                    modal.classList.add('hidden');
                    LimpiarFormulario();
                });

                modal.addEventListener('click', (event) => {
                    if (event.target === modal) {
                        modal.classList.add('hidden');
                        LimpiarFormulario();
                    }
                });

                ListaUsuarios();
            });
        </script>

    </div>
</x-app-layout>