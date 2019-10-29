import { environment } from './../environments/environment';
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import {AngularFireModule} from '@angular/fire';
import {AngularFireDatabaseModule} from '@angular/fire/database';
import {FormsModule} from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CustomersdetailsComponent } from './customers/customersdetails/customersdetails.component';
import { CustomerslistComponent } from './customers/customerslist/customerslist.component';
import { CreatecustomerComponent } from './customers/createcustomer/createcustomer.component';

@NgModule({
  declarations: [
    AppComponent,
    CustomersdetailsComponent,
    CustomerslistComponent,
    CreatecustomerComponent
  ],
  imports: [
    FormsModule,
    BrowserModule,
    AppRoutingModule,
    AngularFireModule.initializeApp(environment.firebase),
    AngularFireDatabaseModule

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
