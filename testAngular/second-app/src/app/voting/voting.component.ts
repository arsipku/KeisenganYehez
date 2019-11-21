import { Component, OnInit, HostBinding, Input } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';


export interface TampunganSuara{
  nama: string;
  vote: number;
}
@Component({
  selector: 'app-voting',
  templateUrl: './voting.component.html',
  styleUrls: ['./voting.component.scss']
})


export class VotingComponent implements OnInit {
  //menyediakan array kosong untuk menampung voting
  tampungan: TampunganSuara[] =[];

  public form: FormGroup;
  constructor(private fb: FormBuilder) { }

  ngOnInit(): void {
    this.constructForm();
  }

  //Validasi form
  constructForm() {
    this.form = this.fb.group({
      nama: this.fb.control(null, Validators.required),
      vote: this.fb.control(null, Validators.required)
    });
  }


  //logic ketika tombol ditekan
  onSubmit() {
    //Tampung objek interface di variable tampung
    let tampung: TampunganSuara = {nama: this.form.get('nama').value, vote: this.form.get('vote').value}

    if (this.form.invalid) { return; }
    this.tampungan.push(tampung);
    this.form.reset();
  }

  onDeleteItem(index) {
    if(confirm("Want to delete it?")){
      this.tampungan.splice(index, 1);
    } else{
      console.log('cancel');
    }
  }

  get sortedArray(){
    return this.tampungan.sort((a: TampunganSuara, b: TampunganSuara) => b.vote - a.vote);
  }

}
