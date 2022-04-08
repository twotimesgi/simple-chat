<template>
<div id="app">
  <status-bar :user="user"/>
    <message-box :user="user"/>
    <input-box />
</div>
</template>

<script>
import InputBox from './components/InputBox.vue';
import MessageBox from "./components/MessageBox.vue";
import StatusBar from "./components/StatusBar.vue";
import Axios from 'axios';

export default {
  name: 'App',
  components:{
    MessageBox,
    StatusBar,
    InputBox
  },
  data(){
    return {
      user: "",
      userId: "",
      messages: []
    }
  },
  mounted(){
    this.user="Guest#" + Math.floor(Math.random()*1000000);
    setInterval(()=>{
      Axios.request("/send.php").then((response)=>{
        console.log(response);
      });
    }, 1000)
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
body{
  background-color: rgb(29, 29, 29);
  display: flex;
  justify-content: center;
  align-items: center;
}
#app{
  width: 700px;
  height: 500px;
  background-color: rgb(252, 252, 252);
  position: relative;
}

#app::before {
  content: "";
  height: 5px;
  background: rgb(0, 210, 123);
  background: linear-gradient(90deg, rgba(1,255,150,1) 0%, rgba(0,210,123,1) 100%);
  position: absolute;
  top: -5px;
  left: 0;
  right: 0;
}
</style>
