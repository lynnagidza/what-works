<div class="row">
    <div class="col-md-12">>
        <ul class="nav nav-tabs bordered">
            <li class="active" id="all"><a data-toggle="tab"><?php echo get_phrase('all_subcounty_transactions'); ?></a></li>
            <li> <a class="showSubcountyData" data-toggle="tab" target="1"><?php echo get_phrase('gatundu_north'); ?></a> </li>
            <li> <a class="showSubcountyData" data-toggle="tab" target="2"><?php echo get_phrase('gatundu_south'); ?></a> </li>
            <li> <a class="showSubcountyData" data-toggle="tab" target="3"><?php echo get_phrase('githunguri'); ?></a> </li>
            <li> <a class="showSubcountyData" data-toggle="tab" target="4"><?php echo get_phrase('juja'); ?></a> </li>
        </ul>
    </div>
</div>
<br><br>

<div class="defaultDiv">
    <div class="col-md-12">
        <div class="tab-content">
            <h3>KIAMBU COUNTY CONTENT</h3>
            <p>Kiambu County is one of the 47 counties in the Republic of Kenya. It is located in the central region and covers a total area of 2,543.5 Km2 with 476.3 Km2under forest cover according to the 2009 Kenya Population and Housing Census. Kiambu County borders.

                Nairobi and Kajiado Counties to the South, Machakos to the East, Murang‘a to the North and North East, Nyandarua to the North West, and Nakuru to the West as indicated on the map below. The county lies between latitudes 00 25‘ and 10 20‘ South of the Equator and Longitude 360 31‘ and 370 15‘ East.</p>
        </div>
    </div>
</div>


<div class="targetDiv" id="div1" hidden>
    <div class="col-md-12">
        <div class="tab-content">
            <h3>GATUNDU NORTH CONTENT</h3>
            <p>Gatundu North Constituency comprises four Markets; Kamwangi, Gatukuyu, Kairi and Makwa. Kamwangi market and Gatukuyu market have dominated the rest of the Markets since Independence due to skewed distribution of resources and poor Infrastructure. As of October 2019 Kairi Market and Makwa market remain dormant. The main economic activity is agriculture, poultry farming and livestock. World Bank's FAO, National Agriculture and Rural Inclusive Growth Project NARIGP have shown willingness and commitment to support Banana farming which is the main lifeline of the majority of constituents. Most of these farmers are poorly funded. Coffee sector in this area has also deteriorated in years to unsustainable levels.</p>
        </div>
    </div>
</div>

<div class="targetDiv" id="div2" hidden>
    <div class="col-md-12">
        <div class="tab-content">
            <h3>GATUNDU SOUTH CONTENT</h3>
            <p>Gatundu South is an electoral constituency in Kiambu County, Kenya and the seat of the District Officer in Gatundu Town. It is one of twelve constituencies in Kiambu County. The constituency has four wards, Kiamwangi, Kiganjo, Ndarugo and Ng'enda all of them are within Kiambu County council. The constituency was established before the 1997 General Elections. Previously it was part of the larger Gatundu Constituency which was split into Gatundu South Constituency and Gatundu North Constituency it is ranked 182 out of 210 Constituencies in Kenya in size and 165 out of 210 in population size.

                Two of Kenya's Presidents are from Gatundu South Constituency: Mzee Jomo Kenyatta (Kenya's founding father and first President of The Republic of Kenya 1964-1978) and his son President Uhuru Kenyatta, 2013–Present.

                The current Gatundu South MP is Moses Kuria who succeeded Jossy Ngugi Nyumu who died after collapsing at his Runda home, in May 2014.</p>
        </div>
    </div>
</div>

<div class="targetDiv" id="div3" hidden>
    <div class="col-md-12">
        <div class="tab-content">
            <h3>GITHUNGURI CONTENT</h3>
            <p>Githunguri is an agricultural town in central Kenya's Central Province. It is one of the administrative centres of Kiambu County and home to one of East Africa's largest dairy processing plant Fresha, which is owned by a farmers co-operative namely Githunguri Dairy farmers cooperative Society. Most of the financial institutions have a presence in this renowned town. They includes: # TAI Sacco Ltd GDC Sacco, KCB, Family Bank, Equity Bank, Cooperative Bank and so on

            </p>
        </div>
    </div>
</div>

<div class="targetDiv" id="div4" hidden>
    <div class="col-md-12">
        <div class="tab-content">
            <h3>JUJA CONTENT</h3>
            <p>Juja is a town in Kiambu County in Kenya. It is the home town for Jomo Kenyatta University of Agriculture and Technology (JKUAT). It is also a constituency in Kiambu county, formerly represented in parliament by Hon Francis Munyua Waititu. The MCA (Member of County Assembly) is Kalpesh Jayantilal Shah who represents the people of Juja Ward at the County Government.

                Juja, also known to many as Jujamaica, is home to more than 200,000 Kenyans who are mostly students.

                There are several industries in Juja, home to Juja Pulp and Paper which recycles brown paper. Star Plastics is another manufacturer which makes water drums and other plastic products. Safari Stationers manufacturers of stationery products. Hydro Aluminum makers of aluminum profiles.


                Thika-Nairobi highway in Juja
                Juja is also home to The Juja City Mall, Juja Preparatory School, Kalimoni Primary School, Mang'u High School and parts of Thika superhighway.

                The town is located about 30 kilometers North of Nairobi between Thika and Ruiru towns. The Nairobi Business Park is found in the environs of this town. One should keep in mind that Juja is under the Nairobi Metropolitan Authority as envisaged in the Vision 2030 of Kenya.F</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#all").click(function() {
            $(".targetDiv").hide("slow");
            $(".defaultDiv").show(2000);
        });

        $(".showSubcountyData").click(function() {
            $(".defaultDiv").hide("slow");
            let $target = $("#div" + $(this).attr("target")).show(2000);
            $(".targetDiv").not($target).hide("slow");

            let selected = $(this).text();
            alert("You have selected " + selected);
        });
    });
</script>
