import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Propietario } from '../Interfaces/propietario';
import { PropietarioService } from '../services/propietario.service';

@Component({
  selector: 'app-propietario',
  templateUrl: './propietario.component.html',
  styleUrls: ['./propietario.component.css']
})
export class PropietarioComponent implements OnInit {

  api_endpoint = 'http://127.0.0.1:8000/api/';
  propietarios: Propietario[] = [];
  constructor(private propietarioService : PropietarioService, private httpClient: HttpClient) {
      this.propietarioService.obtener().subscribe((data: any) => {
        this.propietarios = data;
      }, 
      (error) => {
        alert('Ocurrió un error')
      });
   }

  ngOnInit(): void {
  }

}
