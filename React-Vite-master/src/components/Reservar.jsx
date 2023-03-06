
import React from 'react'
import FullCalendar from '@fullcalendar/react'
import dayGridPlugin from '@fullcalendar/daygrid'
import axios from 'axios'
import { createRoot } from 'react-dom/client';
import Form from './Form';
import esLocale from '@fullcalendar/core/locales/es';
import { store } from '../app/store/store';

export default class Reservar extends React.Component {
    state = this.getCurrentID();

    getCurrentID() {
        return store.getState().login.id;
    }


    constructor(props) {
        super(props);
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick(event) {
        if (event.target.matches("button")) {

            let selectedId = event.target.id;
            document.getElementById('horasDisponiblesText').style.display = 'none';
            document.getElementById('reservar').style.display = 'block';
            let reserva = document.getElementById('reserva');
            createRoot(document.getElementById('reserva')).render(<Form id={{ hora: selectedId, user: this.state }} />);
        }
    }

    render() {

        return (
            <div className="">
                <div className="container mx-auto flex h-screen">
                    <div className="mx-auto my-20">
                        <FullCalendar locale={esLocale}
                            plugins={[dayGridPlugin]}
                            initialView="dayGridMonth"
                            events='https://daw202.medacarena.es/api/auth/eventos'
                            headerToolbar={{
                                left: 'title',
                                center: '',
                                right: 'prev,next today'
                            }}
                            height="auto"
                            eventClick={function (info) {
                                axios.get(`https://daw202.medacarena.es/api/auth/horasreservas?id=${info.event['id']}`).then((res) => {
                                    document.getElementById('horasDisponiblesText').style.display = 'block';
                                    document.getElementById('reservar').style.display = 'none';
                                    let horasDiv = document.getElementById('horas');
                                    horasDiv.innerHTML = '';
                                    res.data.forEach(element => {
                                        let hora = element.hora
                                        hora = hora.substring(0, hora.length - 3);
                                        horasDiv.insertAdjacentHTML('beforeend',
                                            `<button class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" id=${info.event['id']} >${hora}</button>`
                                        );
                                    });
                                });
                            }}

                        />
                    </div>
                </div>
                <div className="container">
                    <div id="horasDisponiblesText">
                        <h1 className="text-center mb-10">Horas disponibles</h1>
                        <div id="horas" className="d-flex gap-3 justify-content-center p" onClick={this.handleClick}>

                        </div>
                    </div>
                    <div id="reservar" className='container'>
                        <div id="reserva" className="d-flex gap-3 justify-content-center">

                        </div>
                    </div>
                </div>
            </div>

        )
    }
}