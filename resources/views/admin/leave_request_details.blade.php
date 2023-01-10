
@extends('admin.app')
@section('title', 'DASHBOARD')
  
@section('css')
<style>
    .table-bordered>:not(caption)>*>* {
    border-width: 1px 1px;
    border-color: black;
    color: black;
}

.hw20{
    width: 20px;
    height: 20px;
}


    </style>
@endsection

 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->




        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body  print-area">
                                        <!-- <h4 class="card-title">Bordered Table</h4>   -->
                                        
                                        <div class="table-responsive" style="margin-bottom: 35px;">
                                            <table class="table table-bordered mb-0">
        
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>Data de notificação</th>
                                                        <th> {{$leave->created_at}} </th>
                                                        <th>届出日</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="text-align: center;">
                                                        <td style="width: 33.33%;">Nome</td>
                                                        <td>{{App\Models\user::find($leave->emp_id)->firstname }} {{App\Models\user::find($leave->emp_id)->lastname }}</td>
                                                        <td>氏 名</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">Fábrica <br> 所属 </td>
                                                        <td style="border-right-width: 0;">
                                                                        
                                                            <div class="row mb-3">
                                                                <div class="col-sm-10">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->factory_name === 'ETRAM' ) hw20 @endif" type="radio" name="formRadios" id="ETRAM" @if($leave->factory_name === 'ETRAM' ) checked @endif > 
                                                                        <label class="form-check-label" for="ETRAM">
                                                                            ETRAM / エトラム
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check"> 
                                                                        <input class="form-check-input @if($leave->factory_name === 'chatoraise' ) hw20 @endif" type="radio" name="formRadios" id="Chatoraise" @if($leave->factory_name === 'chatoraise' ) checked @endif >
                                                                        <label class="form-check-label" for="Chatoraise">
                                                                            Chatoraise / シャトレーゼ
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->factory_name === 'nakaya' ) hw20 @endif" type="radio" name="formRadios" id="Nakaya" @if($leave->factory_name === 'nakaya' ) checked @endif >
                                                                        <label class="form-check-label" for="Nakaya">
                                                                            Nakaya  / 中家製作所 
                                                                        </label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->factory_name === 'nirasaki_kosan' ) hw20 @endif" type="radio" name="formRadios"  id="Nirasaki" @if($leave->factory_name === 'nirasaki_kosan' ) checked @endif >
                                                                        <label class="form-check-label" for="Nirasaki">
                                                                            Nirasaki Kosan  / 韮崎興産
                                                                        </label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->factory_name === 'fujimec' ) hw20 @endif" type="radio" name="formRadios" id="Fujimec" @if($leave->factory_name === 'fujimec' ) checked @endif >
                                                                        <label class="form-check-label" for="html">
                                                                            Fujimec / フジメック
                                                                        </label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->factory_name === 'progress' ) hw20 @endif" type="radio" name="formRadios" id="Progress" @if($leave->factory_name === 'progress' ) checked @endif >
                                                                        <label class="form-check-label" for="Progress">
                                                                            Progress / プログレス 
                                                                        </label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->factory_name === 'HOS' ) hw20 @endif" type="radio" name="formRadios" id="HOSOKAWAMOKUZAI" @if($leave->factory_name === 'HOS' ) checked @endif >
                                                                        <label class="form-check-label" for="HOSOKAWAMOKUZAI">
                                                                            HOSOKAWAMOKUZAI / 細川木材 
                                                                        </label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->factory_name === 'mitsui' ) hw20 @endif" type="radio" name="formRadios" id="Mitsui" @if($leave->factory_name === 'mitsui' ) checked @endif >
                                                                        <label class="form-check-label" for="Mitsui">
                                                                            Mitsui / 三井金属 
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            
                                                        <td style="border-left-width: 0;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
        
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>Período <br> 期 間 </th>
                                                        <th> {{$leave->date1}} ~ {{$leave->date2}}  </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td  style="text-align: center;">Motivo de férias <br> 休暇事由 </td>
                                                        <td >
                                                            
                                                            <div class="row mb-3">
                                                                <div class="col-sm-10">

                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->reason === 'Escola' ) hw20 @endif" type="radio" id="Escola" @if($leave->reason === 'Escola' ) checked @endif  > 
                                                                    
                                                                        <label class="form-check-label" for="Escola">
                                                                            Escola / Creche / 学校・保育園
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->reason === 'Hospital' ) hw20 @endif" type="radio" id="Hospital" @if($leave->reason === 'Hospital' ) checked @endif  > 
                                                                    
                                                                        <label class="form-check-label" for="Hospital">
                                                                        Hospital / 病院
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input @if($leave->reason === 'Outros' ) hw20 @endif" type="radio" id="Outros" @if($leave->reason === 'Outros' ) checked @endif  > 
                                                                        <label class="form-check-label" for="formRadios">
                                                                        Outros / その他(理由)
                                                                        </label>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <p style="margin-top: 11px;">
                                                                        {{$leave->reason_text}}
                                                                        </p>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </td>
                                                        

                                                    </tr>
                                                    <tr style="text-align: center;">
                                                        <td style="width: 33.33%;">Observações <br> 備 考 </td>
                                                        <td> {{$leave->description}} </td>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
        
                                        
                                        <div class="table-responsive" style="margin-top: 35px;">
                                            <table class="table table-bordered mb-0">
        
                                                <thead>
                                                    <tr>
                                                        <th style="width: 33%;"> 承認(社長)</th>
                                                        <th style="width: 33%;">  処理(事務) </th>
                                                        <th style="width: 33%;"> 受付(営業)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 33%;">
                                                            
                                                            <pre>令 和    年     月     日</pre>

                                                        </td>
                                                        <td style="width: 33%;">
                                                            
                                                            <pre>令 和    年     月     日</pre>

                                                        </td>
                                                        <td style="width: 33%;">
                                                            
                                                            <pre>令 和    年     月     日</pre>

                                                        </td>
                                                    </tr>
                                                    <tr >
                                                        <td style="width: 33%;height: 100px;"></td>
                                                        <td style="width: 33%;"></td>
                                                        <td style="width: 33%;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary btn-block" style="margin-bottom: 20px;" id="printBtn"> Print </button>
                            
                        </div>
                        <!-- end row -->
    </div>
    
</div>

@endsection

@section('js')

<script>
    // $('#printBtn').hide();
    $("#printBtn").click(function () {
        $(this).css("display", "none");
    });
// document.getElementById('printBtn').addEventListener('click', () => { window.print() });
document.getElementById('printBtn').addEventListener('click', () => { window.print() });
</script>
@endsection
