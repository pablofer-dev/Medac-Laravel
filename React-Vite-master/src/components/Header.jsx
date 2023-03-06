
import * as React from "react";
import { List } from 'react-bootstrap-icons';
import { BrowserRouter, Routes, Route, NavLink, Form } from "react-router-dom";
import Login from "./Login";
import MisReservas from "./MisReservas";
import Reservas from "./Reservas";
import Reservar from "./Reservar";
import { useSelector } from 'react-redux'
import * as Formu from "./Form";
import Inicio from "./Inicio";
import Contacto from "./Contacto";

export default function Header() {
    const { id } = useSelector(state => state.login);
    return (
        <BrowserRouter>
            <div className="bg-gray-100">
                <div className="bg-white shadow-lg">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                            <div className="flex justify-start lg:w-0 lg:flex-1">
                                <NavLink to="/" >
                                    <img
                                        className="h-8 w-auto sm:h-10"
                                        src="https://raw.githubusercontent.com/pablofer-dev/Medac-Laravel/master/public/img/header/logoTest%20copia.png"
                                        alt="Workflow"
                                    />
                                </NavLink>
                            </div>
                            <div className="-mr-2 -my-2 md:hidden">
                                <button
                                    type="button"
                                    className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                    aria-expanded="false"
                                >
                                    <span className="sr-only">Open menu</span>
                                    <svg
                                        className="h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            strokeWidth={2}
                                            d="M4 6h16M4 12h16M4 18h16"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <nav className="hidden md:flex space-x-10">

                                <NavLink to="/" >
                                    <p className="text-base font-medium text-gray-500 hover:text-gray-900">Inicio</p>
                                </NavLink>
                                <NavLink to="/" >
                                    <p className="text-base font-medium text-gray-500 hover:text-gray-900">Menu</p>
                                </NavLink>

                                {id ? <NavLink to="/mis-reservas" >
                                    <p className="text-base font-medium text-gray-500 hover:text-gray-900">Mis Reservas</p>
                                </NavLink> : null}
                            </nav>
                            <div className="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                                {!id ? <NavLink to="/login" >
                                    <p className="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Login</p>
                                </NavLink> : null}

                                <NavLink to="/reservar" >
                                    <p className="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-5">Reservar</p>
                                </NavLink>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <Routes>
                <Route path="/" element={<Inicio />} />
                <Route path="/contacto" element={<Contacto />} />
                <Route path="/reservar" element={<Reservar />} />
                <Route path="/mis-reservas" element={<MisReservas />} />
                <Route path="/login" element={<Login />} />
                <Route path="*" element={<h1>404</h1>} />
            </Routes>
        </BrowserRouter>

    );
}