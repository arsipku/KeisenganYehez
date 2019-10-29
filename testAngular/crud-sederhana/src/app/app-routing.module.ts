import { CreatecustomerComponent } from './customers/createcustomer/createcustomer.component';
import { CustomerslistComponent } from './customers/customerslist/customerslist.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


const routes: Routes = [
  {path: '', redirectTo: 'customers', pathMatch: 'full'},
  {path: 'customers', component: CustomerslistComponent},
  {path: 'add', component: CreatecustomerComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
