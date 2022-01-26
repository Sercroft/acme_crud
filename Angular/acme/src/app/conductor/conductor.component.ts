import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Conductor } from '../Interfaces/conductor';
import { ConductorService } from '../services/conductor.service';

@Component({
  selector: 'app-conductor',
  templateUrl: './conductor.component.html',
  styleUrls: ['./conductor.component.css']
})
export class ConductorComponent implements OnInit {

  api_endpoint = 'http://127.0.0.1:8000/api/';
  conductores: Conductor[] = [];
  constructor(private conductorService : ConductorService, private httpClient: HttpClient) { 
    httpClient.get(this.api_endpoint + 'conductor').subscribe((data:any) => {
      this.conductores = data;
      console.log(data);
    });
  }

  ngOnInit(): void {
  }
  

}
