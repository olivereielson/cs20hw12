//define all the vars I want to use
let costArray = [1, 2.5, 16.89, 9.8, 8.64];
let quanArray = [0, 0, 0, 0, 0, 0];
let total_cost = 0;
let tax = 0;
let final_cost = 0;

let first_name, last_name, instructions;
//copy this over because I dont want to type the names again.

//Calculate the completed time 
function get_time(time) {
    //get current time
    const someMillisecondValue = Date.now();
    const date = new Date(someMillisecondValue);
    //get the minutes and if over 60 take modulus 
    let minute = (date.getMinutes() + time) % 60;
    //get hours and bump up if mins over 60
    let hour = date.getHours() + Math.floor((date.getMinutes() + time) / 60);
    //if mins less than 10 add the extra 0
    if (minute < 10) {
        return hour + ":0" + minute;
    }
    //concatenate the strings 
    return hour + ":" + minute;
}


//you cant tell from the name but this calculates the cost of everything. 
function caculate_costs(){
    //set all vals to 0 for when this method gets rerun
    total_cost = 0;
    tax = 0;
    final_cost = 0;
    //for all the foods calculate the costs and update the vals on the page.
    for (let i = 0; i < 5; i++) {
        let cost = (quanArray[i] * costArray[i]);
        $("p[id=cost"+i.toString()+"]").text(cost.toFixed(2));
        //update total cost
        total_cost = total_cost + cost
    }

    //calculate tax and total cost
    tax = (total_cost * 0.0625);
    final_cost = (total_cost + tax);
    //update total cost vals
    $("input[id=subtotal]").val(total_cost.toFixed(2));
    $("input[id=tax]").val(tax.toFixed(2));
    $("input[id=total]").val(final_cost.toFixed(2));

}

// Make a new page for after order

//is something is not 'good' then let the user know my making it red
function is_good(bool, name) {

    if (bool) {
        $("input[name=" + name + "]").css('border', '2px solid red');
        return 1;
    }
    $("input[name=" + name + "]").css('border', '1px solid rgba(255,255,255,.4)');
    return 0;
}

//validate the user input before submission
function validate() {


    var d = new Date();
    let hours=d.getHours();
    let mins=d.getMinutes(); // => 9

    if((hours>14 && hours<19)||(hours==18 && mins<45)){
        if(!(hours==14 && mins<45)){
            alert("We are not open now");
            is_valid++;
        }
    }




    let is_valid = 0;

    //check all the vals and if null highlight them in red
    is_valid += is_good(last_name == null, "fname");
    is_valid += is_good(last_name == null, "lname");

    //make sure someone was purchased
    if (total_cost === 0) {
        is_valid++;
        alert("Buy something!!!!");
    }

    //if everything is valid say thanks and build new page
    if (is_valid === 0) {
        window.open ('order.php','_self',false)
    }

}


//main function that starts one the pages is initialized 
$(document).ready(function () {



    //add a listener to all the foods 
    for (let i = 0; i < 5; i++) {

        $('select[id=quan' + i.toString() + ']').change(function () {
            //save the quan selected then calculate cost
            quanArray[i] = this.value;
            console.log("herere");
            caculate_costs();
        });

    }

    //add listener to submit
    $("input[type=button]").click(function () {
       // validate();


        window.open ('order.php','_self',false)

    });

    //add listeners to the user inputs
    $("input[name=lname]").change(function () {
        last_name = this.value;
    });
    $("input[name=fname]").change(function () {
        first_name = this.value;
    });
    $("input[name=instructions]").change(function () {
        instructions = this.value;
    });

    caculate_costs();
});
    


