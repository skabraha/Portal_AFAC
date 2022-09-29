<div x-data="{ 'showModal': true }" @keydown.escape="showModal = false">
    <div class="z-40 fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-75"
        x-show="showModal">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="p-6 text-center content-center">
                    <section class="mx-auto pb-10 flex justify-center">
                        <img src="{{asset('images/AFAC1.jpg')}}" class="w-36 h-28" alt="Afac Logo" />
                    </section>
                    <p class="text-lg text-gray-700">La información recopilada se considera reservada, así como los
                        datos de las personas, no se
                        proporcionará para fines diferentes de acuerdo a Ley de Aviación civil Artículo 78 Bis 5, 78 BIS
                        6, 78 BIS 7, 78 BIS 8.</p>
                    <button type="button"
                        class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        @click="showModal = false">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>