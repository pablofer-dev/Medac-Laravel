import * as React from "react";

export default function Inicio() {

    return (
        <div className="">
            <div class="bg-white">
                <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h1 class="text-3xl sm:text-5xl font-bold mb-4">Bienvenidos a nuestro restaurante</h1>
                            <p class="text-gray-600 leading-relaxed mb-8">En nuestro restaurante ofrecemos una amplia variedad de platillos deliciosos, preparados con los ingredientes más frescos y de la mejor calidad. Ya sea que busques algo dulce, salado o picante, estamos seguros de que encontrarás algo que te encantará.</p>
                            <a href="/reservar" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Haz una reserva</a>
                        </div>
                        <div>
                            <img class="rounded-lg shadow-lg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/NCI_Visuals_Food_Hamburger.jpg/640px-NCI_Visuals_Food_Hamburger.jpg" alt="Imagen de platillo"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-100 py-8 md:py-16" id="menuss">
                <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl sm:text-5xl font-bold mb-4">Nuestros platillos más populares</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://eldiariony.com/wp-content/uploads/sites/2/2023/01/Chow-mein-shutterstock_1400786078.jpg?quality=75&strip=all&w=1200" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://media.traveler.es/photos/6137808dfd8ea62e2db32c80/4:3/w_1400,h_1050,c_limit/203614.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://restaurantechinacity.com/wp-content/uploads/2020/05/IMG_20200524_172020-scaled.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.cocinacaserayfacil.net/wp-content/uploads/2019/11/Comida-china.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.cocinacaserayfacil.net/wp-content/uploads/2019/11/Comida-china.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.cocinacaserayfacil.net/wp-content/uploads/2019/11/Comida-china.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.cocinacaserayfacil.net/wp-content/uploads/2019/11/Comida-china.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.cocinacaserayfacil.net/wp-content/uploads/2019/11/Comida-china.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <img class="w-full" src="https://www.cocinacaserayfacil.net/wp-content/uploads/2019/11/Comida-china.jpg" alt="Imagen de platillo"/>
                                <div class="p-4">
                                    <h3 class="text-xl font-bold mb-2">Taco al pastor</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">Taco de carne de cerdo adobada, cebolla, cilantro, piña y salsa.</p>
                                    <div class="text-right">
                                        <span class=" from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-bold">$5.99</span>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    );
}