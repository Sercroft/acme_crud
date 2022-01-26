import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Conductor } from '../Interfaces/conductor';
import { Propietario } from '../Interfaces/propietario';
import { Vehiculo } from '../Interfaces/vehiculo';
import { ConductorService } from '../services/conductor.service';
import { PropietarioService } from '../services/propietario.service';
import { VehiculoService } from '../services/vehiculo.service';

@Component({
  selector: 'app-vehiculo',
  templateUrl: './vehiculo.component.html',
  styleUrls: ['./vehiculo.component.css']
})
export class VehiculoComponent implements OnInit {
  api_endpoint = 'http://127.0.0.1:8000/api/';
  vehiculos: Vehiculo[] = [];
  propietarios: Propietario[] = [];
  conductores: Conductor[] = [];

  constructor(private vehiculoService : VehiculoService, private propietarioService : PropietarioService, private conductorService : ConductorService, httpClient: HttpClient) {
    this.vehiculoService.obtener().subscribe((data: any) => {
      this.vehiculos = data;
    }, 
    (error) => {
      alert('Ocurrió un error')
    });

    this.propietarioService.obtener().subscribe((data: any) => {
      this.propietarios = data;
    }, 
    (error) => {
      alert('Ocurrió un error')
    });

    this.conductorService.obtener().subscribe((data: any) => {
      this.conductores = data;
    }, 
    (error) => {
      alert('Ocurrió un error')
    });
 }

  ngOnInit(): void {
  }

}
