import * as React from "react";

export default function Contacto() {

    return (
        <div className="">
            <div class="bg-gray-100">
                <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-16">
                    <h1 class="text-3xl sm:text-5xl font-bold mb-4">Contáctanos</h1>
                    <p class="text-gray-600 leading-relaxed mb-8">¿Tienes alguna pregunta, comentario o sugerencia? ¡Estamos aquí para ayudarte! Por favor completa el formulario de abajo y nos pondremos en contacto contigo lo antes posible.</p>
                    <form action="#" method="POST" class="max-w-lg mx-auto">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Nombre completo:</label>
                            <input type="text" id="name" name="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Correo electrónico:</label>
                            <input type="email" id="email" name="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required />
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Mensaje:</label>
                            <textarea id="message" name="message" rows="6" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-5">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    );
}