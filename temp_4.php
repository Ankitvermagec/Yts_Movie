<input oninput="aa()"  type="text" name="ankit" >
<h1 id="html">ankit</h1>
<script>
    aa = () =>  {
        x = document.getElementsByName('ankit')[0].value
        document.getElementById('html').innerHTML = x
        //   document.write(x)
    }
   
</script>