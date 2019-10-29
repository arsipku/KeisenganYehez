import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomersdetailsComponent } from './customersdetails.component';

describe('CustomersdetailsComponent', () => {
  let component: CustomersdetailsComponent;
  let fixture: ComponentFixture<CustomersdetailsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CustomersdetailsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CustomersdetailsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
