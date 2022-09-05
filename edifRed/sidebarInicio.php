<!-- Sidebar -->
<div id="sidebar-container-inicio">
    
<div align="center">
    <h2 class="text-light my-4" style="width: 400px;">¿Como desea ingresar?</h2>
</div>

<div class="container my-4">
    <div class="col" align="center">
        <div class="row m-4 d-inline"  style="justify-content: space-around!important; width: 300px!important; height: 100px!important;">
            <div class="card text-light"style="width: 300px!important; justify-content: space-around; background-color:#B84368;">
                <h3 class="pt-2 mb-2"><i class="bi bi-building"></i> Administrador</h3>

                <div class="collapse" style=" z-index:1000;" id="formAdm" >
                   <form id="formAdmins" >
                   <div class="form-group">
                        <input type="text" name="rutA" id="rutA" class="form-control m-0 d-inline-flex" placeholder="RUT" maxlength="10" autocomplete="off" style="width:170px;" required>
                        <span>-</span>
                        <select name="DVA" id="DVA" class="form-control m-0 p-0 d-inline-flex" style="width:50px" required>
                            <option disabled selected value="DV">DV</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="k">k</option>
                        </select>
                        </div>
                        <input type="password" name="passwordA" id="passwordA" class="form-control my-2" placeholder="Contraseña" style="width:235px;" required>

                        <input type="submit" class="btn btn-outline-light my-2 font-weight-bold" value="Ingresar" >
                   </form>             
                </div>

                <button class="btn btn-sm btn-toggle text-light collapsed p-0" style="box-shadow:none!important;" id="btnLoginAdm" data-bs-toggle="collapse" data-bs-target="#formAdm" aria-expanded="false">
                    <i id="iconoAdm" style="font-size:28px;" class="bi bi-chevron-compact-down"></i>
                </button>

            </div>
        </div>
        <!-- /.box-body 
        <div class="row m-4 d-inline" style="justify-content: space-around!important; width: 300px!important;  height: 100px!important;">
            <div class="card text-light" style="width: 300px!important; justify-content: space-around; background-color:#FFB356;">
                <h3 class="pt-2 mb-2"><i class="bi bi-person-lines-fill"></i> Propietario </h3>

                <div class="collapse" style=" z-index:1000; " id="formPro">
                    <form id="formPropietario">
                    <div class="form-group">
                        <input type="text" name="rutP" id="rutP"  class="form-control m-0 d-inline-flex" placeholder="RUT" maxlength="8" autocomplete="off" style="width:170px;" required>
                        <span>-</span>
                        <select name="DVP" id="DVP" class="form-control m-0 p-0 d-inline-flex" style="width:50px" required>
                            <option disabled selected>DV</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="k">k</option>
                        </select>
                        </div>
                        <input type="password" name="passwordP" id="passwordP" class="form-control my-2" placeholder="Contraseña" style="width:235px;" required>

                        <input type="submit" class="btn btn-outline-light my-2 font-weight-bold" value="Ingresar" >
                    </form>          
                </div>

                <button class="btn btn-sm btn-toggle text-light collapsed p-0" style="box-shadow:none!important;" id="btnLoginPro" data-bs-toggle="collapse" data-bs-target="#formPro" aria-expanded="false">
                    <i id="iconoPro" style="font-size:28px;" class="bi bi-chevron-compact-down"></i>
                </button>
            </div>
        </div>
        -->
        <div class="row m-4 d-inline" style="justify-content: space-around!important; width: 300px!important;  height: 100px!important;">
            <div class="card text-light" style="width: 300px!important; justify-content: space-around; background-color:#EB745D;">
                <h3 class="pt-2 mb-2"><i class="bi bi-tools"></i> Encargado</h3>

                <div class="collapse" style=" z-index:1000;" id="formEnc">
                    <form id="formEncargado">
                        <div class="form-group">
                        <input type="text" name="rutE" id="rutE" class="form-control m-0 d-inline-flex" placeholder="RUT" maxlength="10" autocomplete="off" style="width:170px;" required>
                        <span>-</span>
                        <select name="DVE" id="DVE" class="form-control m-0 p-0 d-inline-flex" style="width:50px" required>
                            <option disabled selected>DV</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="k">k</option>
                        </select>
                        </div>
                        <input type="password" id="passwordE" name="passwordE" class="form-control my-2" placeholder="Contraseña" style="width:235px;" required>

                        <input type="submit" class="btn btn-outline-light my-2 font-weight-bold" value="Ingresar" >
                    </form>          
                </div>

                <button class="btn btn-sm btn-toggle text-light collapsed p-0" style="box-shadow:none!important;" id="btnLoginEnc" data-bs-toggle="collapse" data-bs-target="#formEnc" aria-expanded="false">
                    <i id="iconoEnc" style="font-size:28px;" class="bi bi-chevron-compact-down"></i>
                </button>
            </div>

        </div>

    </div>

</div>
   
               
        
</div>



<script>
    
Number.prototype.format = function(n, x, s, c) {
    let re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
        num = this.toFixed(Math.max(0, ~~n));
    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};


function setInputFilter(textbox, inputFilter) {
    ["input"].forEach(function(event) {
        textbox.addEventListener(event, function() {
            if (this.id === "rutA") {
                if (this.value !== "") {
                    let str = this.value;
                    let oldstr= str.substring(0, str.length - 1);
                    let millares = ".";
                    let decimales = ",";
                    str = str.split(millares).join("");
                    if (isNaN(str)) {
                        this.value = oldstr;
                    } else {
                        let numero = parseInt(str);
                        this.value = numero.format(0, 3, millares, decimales);
                    }
                }
            }
            if (this.id === "rutE") {
                if (this.value !== "") {
                    let str = this.value;
                    let oldstr= str.substring(0, str.length - 1);
                    let millares = ".";
                    let decimales = ",";
                    str = str.split(millares).join("");
                    if (isNaN(str)) {
                        this.value = oldstr;
                    } else {
                        let numero = parseInt(str);
                        this.value = numero.format(0, 3, millares, decimales);
                    }
                }
            }
        });
    });
}

setInputFilter(document.getElementById("rutE"), function(value) {
    //declare an object RegExp
    let regex = new RegExp(/^-?\d*$/);
    //test the regexp
    return regex.test(value);
});

setInputFilter(document.getElementById("rutA"), function(value) {
    //declare an object RegExp
    let regex = new RegExp(/^-?\d*$/);
    //test the regexp
    return regex.test(value);
});
</script>
        
        <!-- Fin sidebar -->