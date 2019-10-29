import { Component, OnInit, Input } from '@angular/core';
import { Customer } from '../customer';
import { CustomerService } from '../customer.service';

@Component({
  selector: 'app-customersdetails',
  templateUrl: './customersdetails.component.html',
  styleUrls: ['./customersdetails.component.css']
})
export class CustomersdetailsComponent implements OnInit {

  @Input() customer: Customer;

  constructor(private customerService: CustomerService) { }

  ngOnInit() {
  }

  updateActive(isActive: boolean) {
    this.customerService
      .updateCustomer(this.customer.key, { active: isActive })
      .catch(err => console.log(err));
  }

  deleteCustomer() {
    this.customerService
      .deleteCustomer(this.customer.key)
      .catch(err => console.log(err));
  }

}
