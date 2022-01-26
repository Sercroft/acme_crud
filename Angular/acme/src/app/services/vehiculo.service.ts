import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Vehiculo } from '../Interfaces/vehiculo';

@Injectable({
  providedIn: 'root'
})
export class VehiculoService {
  api_endpoint = 'http://127.0.0.1:8000/api/' 
  constructor(private httpClient:HttpClient) { }

  obtener(){
    return this.httpClient.get(this.api_endpoint + 'vehiculo');
  }

  guardar(vehiculo:Vehiculo){
    const headers = new HttpHeaders({'Content-Type':'application/json'});
    return this.httpClient.post(this.api_endpoint+'vehiculo', vehiculo, {headers: headers});
  }
}
