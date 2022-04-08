<template>
<div class="input-box">
  <input class="msg-input" placeholder="Write a message..." v-model="msg" type="text" @keydown.enter="sendMsg">
</div>
</template>

<script>
export default {
  name: 'InputBox',
  data(){
    return {
      msg: "",
    }
  },
  methods:{
    sendMsg(){
      console.log(this.msg);
      this.msg = "";
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.input-box{
  width: 700px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 10px;
}

.msg-input{
  width: 100%;
  height: 100%;
  padding: 10px;
  border: none;
  border-top: 1px solid rgb(225, 225, 225);
  border-radius: 0;
}

.msg-input:focus{
  outline: none;
}
</style>
