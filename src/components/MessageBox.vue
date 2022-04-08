<template>
<div class="message-box">
  <div v-for="msg in fetchedMsgs" :key="msg.id" :class="user == msg.sender ? 'sent' : 'received'" class="message">
    <div class="msg-sender">{{ msg.sender }}</div>
    {{ msg.text }}
    <div class="msg-time"> {{ dateToString(msg.time) }} </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'MessageBox',
  props:{
    user: String
  },
  data(){
    return {
      fetchedMsgs: [
        {
          id: 1,
          sender: "Marco",
          text: "Ciao caro",
          time: "2022-08-04T15:00:00"
        },
        {
          id: 2,
          sender: "twotimesgi",
          text: "Ciao Marco",
          time: "2022-08-04T15:00:00"
        },
        {
          id: 3,
          sender: "Luca",
          text: "Ciao a tutti",
          time: "2022-08-04T15:05:00"
        },
        {
          id: 4,
          sender: "Marco",
          text: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eius soluta nihil maiores corporis veniam quibusdam magni numquam illum pariatur, assumenda fugiat expedita optio! Reprehenderit culpa neque recusandae laboriosam dolores!",
          time: "2022-08-04T15:06:00"
        },
        {
          id: 5,
          sender: "twotimesgi",
          text: "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
          time: "2022-08-04T15:00:00"
        },
      ]
    }
  },
  methods:{
    dateToString(date){
      let parsedDate = new Date(date);
      return parsedDate.toLocaleTimeString("en-US", {timeStyle: 'short'});
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.message-box{
  width: 700px;
  height: 425px;
  background-color: rgb(255, 255, 255);
  overflow-y: scroll;
  display: flex;
  flex-direction: column;
  gap: 10px;
  align-items: flex-start;
  padding: 20px;
  font-size: 0.9rem;
}

.message{
  padding: 30px 50px 8px 10px;
  border-radius: 0.9rem;
  max-width: 400px;
  position: relative;
  font-weight: 300;
  line-height: 1.2rem;
}

.received{
    background-color: rgb(245, 245, 245);
}

.sent{
    background-color: rgb(245, 245, 245);
    align-self: flex-end;
}

.msg-time{
  position: absolute;
  bottom: 2px;
  right: 9px;
  font-size: 0.6rem;
  opacity: 0.4;
  line-height: 1rem;
}

.msg-sender{
  position: absolute;
  top: 10px;
  left: 10px;
  opacity: 1;
  font-weight: 400;
}
</style>
