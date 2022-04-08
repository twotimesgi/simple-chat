<template>
<div id="app">
  <status-bar :user="user"/>
    <message-box v-if="logged" :user="user"/>
    <input-box v-if="logged" />
</div>
</template>

<script>
import InputBox from './InputBox.vue';
import MessageBox from "./MessageBox.vue";
import StatusBar from "./StatusBar.vue";
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
    this.user="Guest#" + Math.floor(Math.rand()*100);
    setInterval(()=>{
      Axios.request("../public/send.php").then((response)=>{
        console.log(response);
      });
    }, 1000)
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
#app{
  width: 700px;
  height: 500px;
  background-color: rgb(252, 252, 252);
  position: relative;
}

.login-box{
  width: 100%;
  height:425px;
  display: flex;
  justify-content: center;
  align-items: center;

  div{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  }

  input{
      margin: 10px 0;
  }
}


.chat::before {
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
