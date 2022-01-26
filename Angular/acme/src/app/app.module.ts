import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PropietarioComponent } from './propietario/propietario.component';
import { ConductorComponent } from './conductor/conductor.component';
import { FormComponent } from './form/form.component';
import { VehiculoComponent } from './vehiculo/vehiculo.component';
import { Route, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { Form2Component } from './form2/form2.component';
import { Form3Component } from './form3/form3.component';

const routes: Route[] = [
  {path: '', component:VehiculoComponent},
  {path: 'propietario', component:PropietarioComponent},
  {path: 'conductor', component:ConductorComponent},
  {path: 'form', component:FormComponent},
  {path: 'form2', component:Form2Component},
  {path: 'form3', component:Form3Component},
  {path: 'vehiculo', component:VehiculoComponent},
  {path: 'home', component:HomeComponent},
];

@NgModule({
  declarations: [
    AppComponent,
    PropietarioComponent,
    ConductorComponent,
    FormComponent,
    VehiculoComponent,
    HomeComponent,
    Form2Component,
    Form3Component
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes), 
    HttpClientModule,
    FormsModule,
    AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
