import EventCard from './ElcipseEventCard.js'
import InnerHeader from './InnerHeader.js'


export default {

	components: {
		EventCard,
		InnerHeader
	},
	props:{},

	computed:{

	},
	data(){
		return {
		isBlur:false,
		eclipse_content_wrap:"eclipse_content_wrap"
		}
	},
	watch:{
	//conditional logic to call a method
	},
	methods:{
		blurBack() {
			this.isBlur = !this.isBlur
		}
	},

	template:`
	<inner-header @blur-back="blurBack">Events</inner-header>
	<div  :class="[{ background_blur: isBlur },eclipse_content_wrap]">
	  <event-card>
		<template #date>February 12, 2024</template>
		<template #title>Awesome Fun Filled Event</template>
		<template #body>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.</template>
		<template #calendar><add-to-calendar-button
		  styleLight= '--btn-background: #2f4377; --btn-text: #fed000;--font: "peridot-pe-variable", Arial, Helvetica, sans-serif;--btn-underline: #e9eef6;--btn-border: #a8a8a8;--btn-background: #000d23;--btn-background-hover: #000d23;--btn-text: #fed000;--btn-text-hover: #000d23;--btn-text-shadow: #e9eef6;--list-background: #e9eef6;--list-background-hover: #e9eef6;--list-text: #000d23;--list-text-hover: #000d23;'
		  name="Sample Event"
		  description="Play with me!"
		  startDate="2024-02-12"
		  timeZone="America/Chicago"
		  options="'Apple','Google','iCal'"
		  buttonStyle="text"
		  trigger="click"
		  label="+ Add to Calendar"
		  hideIconButton
		  size="5"
		  lightMode="system"
		  pastDateHandling="hide"
		></add-to-calendar-button></template>
	  </event-card>
	  <event-card>
		  <template #date>February 12, 2024</template>
		  <template #title>Awesome Fun Filled Event</template>
		  <template #body>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.</template>
		  <template #calendar><add-to-calendar-button
			styleLight= '--btn-background: #2f4377; --btn-text: #fed000;--font: "peridot-pe-variable", Arial, Helvetica, sans-serif;--btn-underline: #e9eef6;--btn-border: #a8a8a8;--btn-background: #000d23;--btn-background-hover: #000d23;--btn-text: #fed000;--btn-text-hover: #000d23;--btn-text-shadow: #e9eef6;--list-background: #e9eef6;--list-background-hover: #e9eef6;--list-text: #000d23;--list-text-hover: #000d23;'
			name="Sample Event"
			description="Play with me!"
			startDate="2024-02-12"
			timeZone="America/Chicago"
			options="'Apple','Google','iCal'"
			buttonStyle="text"
			trigger="click"
			label="+ Add to Calendar"
			hideIconButton
			size="5"
			lightMode="system"
			pastDateHandling="hide"
		  ></add-to-calendar-button></template>
	  </event-card>
	  <event-card>
		  <template #date>February 12, 2024</template>
		  <template #title>Awesome Fun Filled Event</template>
		  <template #body>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.orem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut</template>
		  <template #calendar><add-to-calendar-button
			styleLight= '--btn-background: #2f4377; --btn-text: #fed000;--font: "peridot-pe-variable", Arial, Helvetica, sans-serif;--btn-underline: #e9eef6;--btn-border: #a8a8a8;--btn-background: #000d23;--btn-background-hover: #000d23;--btn-text: #fed000;--btn-text-hover: #000d23;--btn-text-shadow: #e9eef6;--list-background: #e9eef6;--list-background-hover: #e9eef6;--list-text: #000d23;--list-text-hover: #000d23;'
			name="Sample Event"
			description="Play with me!"
			startDate="2024-02-12"
			timeZone="America/Chicago"
			options="'Apple','Google','iCal'"
			buttonStyle="text"
			trigger="click"
			label="+ Add to Calendar"
			hideIconButton
			size="5"
			lightMode="system"
			pastDateHandling="hide"
		  ></add-to-calendar-button></template>
	  </event-card>
	  <event-card>
		  <template #date>February 12, 2024</template>
		  <template #title>Awesome Fun Filled Event with amazing cash prizes</template>
		  <template #body>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Rhoncus Urna Neque Viverra Justo Nec Ultrices Dui Sapien Eget. Velit Egestas Dui Id Ornare Arcu Odio Ut.</template>
		  <template #calendar><add-to-calendar-button
			styleLight= '--btn-background: #2f4377; --btn-text: #fed000;--font: "peridot-pe-variable", Arial, Helvetica, sans-serif;--btn-underline: #e9eef6;--btn-border: #a8a8a8;--btn-background: #000d23;--btn-background-hover: #000d23;--btn-text: #fed000;--btn-text-hover: #000d23;--btn-text-shadow: #e9eef6;--list-background: #e9eef6;--list-background-hover: #e9eef6;--list-text: #000d23;--list-text-hover: #000d23;'
			name="Sample Event"
			description="Play with me!"
			startDate="2024-02-12"
			timeZone="America/Chicago"
			options="'Apple','Google','iCal'"
			buttonStyle="text"
			trigger="click"
			label="+ Add to Calendar"
			hideIconButton
			size="5"
			lightMode="system"
			pastDateHandling="hide"
		  ></add-to-calendar-button></template>
	  </event-card>
	  </div>
	`
}
