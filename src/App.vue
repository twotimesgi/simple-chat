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
      Axios.request("/messages.php").then((response)=>{
        console.log(response);
      });
    }, 1000)
  }
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
  background-color: rgb(29, 29, 29);
  font-family: 'Roboto', sans-serif;
}

#app{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 700px;
  height: 500px;
  background-color: rgb(252, 252, 252);
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
