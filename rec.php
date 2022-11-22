<!DOCTYPE html>
<head>
<link href="style.css" rel="stylesheet">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=nEo5QtP4QJjcTwzRAMy6BPL1UWe5L579QfXw7Nu2sgmwvRr5Mu6O04XjoN_xtYCxM4oX95eg7jG_azu1-_ijyenIg9iT7oiBOf-IsyjwdeiNTgej6XgPXass_0aOJsV-sBIAxC405muu4Jw2i1jBae8W4ObZNjzjXOPNplUOljxDXHUYVQb0za51JAxuQfvWQlL8XFVUutxCg2cgukuI4ervtyqxBNSV5UmQ_1-8qiJfbF82D1xt6cc2GpWa-Q971L-_mdVTlmdWXc0MEU2gFu2rhtgDoibMq7UL9GXLlo5ty8KhajCyFtTplguXZ26ZVg5VWteeIgTNA99SngVRtHNPMZrkBt5oXq7yfIHnF4Z4GohQsmBRzDc4LtZJZ2LixOkJbKJKAs5YOwzYEWOgWfTOhiL4h0LSNRhZVd-PcvLiNZINB9qlJAOX_da8ruGmvQf2zCLBIpn_NNh3UxEtt_PzBq3u6gReeXExAiObsHX8K9OJkTkwi5OdF1KfVwBKSUUzsJGm1jGitftQe1a5b5i__ikx4RSFCGe_V1w5o1YguRlgwQivY0W3sRPwPasWNshuDhii0jdpWfnRT5RRQ1YuyhQsyds5tig5m0El2KY8nc6PUC36AdKviu19KNn5migBJpYj6IJJNqwTxztnYIx7eVTE2j2rxFyvmcVd2JuPwvH1vC_AyS9MrmeWtgbqStUiY3iEFbMaCQh5eseer6PS0ExWs2iPTimkjYcRZBNrWK7LGviO4ZPenO25g8OPQQZ1qs0H9fm6FBlrcWGE9qaRGeVAutZX5_ODaGG90o5F4Me4FcjaPlZzg6K3rFTnlg7PXXfi7X_ALll280hBAAu414vNizaNydbGujDQylfivXv8DK2ki2VsfkHPMOlhkYOhn6nXxNOov3ERSOSxKWiZrskSlXLNHwRV541cF4YPXSYmVAOkxoGYi-HD3g8UidCsZ8GSr8HChL7k3eefeRC8DkUgVAuYSlPqiEO-LMHoqWP-ofX33nZOOtI32yOVmf7nWz_giUt-Mjsq5U_5dAd1le2g0HfR7-uRhnI3nWeGq7q9kxI5I9Uj-tthimtVQu8t-lfhYqEoh1n2-Xdi_tRupGO8fBiI0a0rX1C39c1NcMtEG6Nl7DxpIigus_T1wrxCEFcnl15--GEpsKEE5BpaqX5tSmiBzoZx-R-MrCi1ag-G1xUweN-5Xc-jKUMAI8bPTUoJS8-GKsbS9uL1FQ" nonce="28ba65319cc1bfcc10fe244df7986354" charset="UTF-8"></script></head>
<script>
    var mysample1 = '';
    var mysample2 = '';
    var mysample3 = '';
    var arr=[]
    function setval1(varval)
    {
        mysample1= varval;
        alert(mysample1);      
        arr[0]=mysample1;
    }
    function setval2(varval)
    {
        mysample2= varval;
        alert(mysample2);
        arr[1]=mysample2;
    }
    function setval3(varval)
    {
        mysample3= varval;
        arr[2]=mysample3;
        alert(arr);
    }
    function next()
    {
        $.ajax({
        method: "POST",
        url: "d7.php",
        data: { arr }
        })
    }
   
    </script>
<body>

<form action="db7.php" method="post">
\    <div class="segment">
      
      <h2> Books you've read</h2>
      <button class="unit" type="button" name="BK" onclick="javascript:setval1(0)" style="background-image: url('book-cover-To-Kill-a-Mockingbird-many-1961.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-bookmark"></i></button>
      <button class="unit" type="button"  name="BK"onclick="javascript:setval1(1)"style="background-image: url('life-of-pi.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-settings"></i></button>
      <button class="unit" type="button"  name="BK"onclick="javascript:setval1(2)"style="background-image: url('pandp.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-arrow-back"></i></button>
      <button class="unit" type="button"  name="BK"onclick="javascript:setval1(3)"style="background-image: url('safa.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-bookmark"></i></button>
      <button class="unit" type="button"  name="BK"onclick="javascript:setval1(4)"style="background-image: url('fios.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-settings"></i></button>
      <h2> Author's you adore</h2>
        <button class="unit" type="button" name="AUTH" onclick="javascript:setval2(0)"style="background-image: url('lavryle.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-arrow-back"></i></button>
      <button class="unit" type="button"name="AUTH" onclick="javascript:setval2(1)" style="background-image: url('jack\ london.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-bookmark"></i></button>
      <button class="unit" type="button" name="AUTH"onclick="javascript:setval2(2)" style="background-image: url('Jenny_Offill.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-settings"></i></button>
      <button class="unit" type="button" name="AUTH" onclick="javascript:setval2(3)" style="background-image: url('lois.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-arrow-back"></i></button>
      <button class="unit" type="button" name="AUTH" onclick="javascript:setval2(4)" style="background-image: url('Gillian-Flynn-American.jpg');background-size: cover;background-position: center;"><i class="icon ion-md-bookmark"></i></button>
        <h3 style="font-size: 18px;"> Genre you'd like to explore more</h3>
        <button class="unit" type="button" name="GEN" onclick="javascript:setval3(0)"style="font-size: small; color:rgb(240, 240, 86);"  ><i class="icon ion-md-arrow-back"></i>THRILLER</button>
        <button class="unit" type="button" name="GEN" onclick="javascript:setval3(1)"style="font-size: small;color:rgb(240, 240, 86);"  ><i class="icon ion-md-arrow-back"></i> ROMANCE</button>
        <button class="unit" type="button"name="GEN" onclick="javascript:setval3(2)" style="font-size: small; color:rgb(240, 240, 86);"  ><i class="icon ion-md-arrow-back"></i>FICTION</button>
        <button class="unit" type="button" name="GEN" onclick="javascript:setval3(3)" style="font-size: small; color:rgb(240, 240, 86);"  ><i class="icon ion-md-arrow-back"></i>YOUNG ADULTS</button>
        <button class="unit" type="button" name="GEN" onclick="javascript:setval3(4)" style="font-size: small; color:rgb(240, 240, 86);"  ><i class="icon ion-md-arrow-back"></i>ACTION</button>

        
    </div>

   
    <button  onclick="javascript:" style="font-size: small; color:rgb(240, 240, 86); align-content: center;align-self: center; size: 20px;"/><i class="icon ion-m d-lock"></i>    
</form>
</body>
</html>
