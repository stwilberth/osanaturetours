import goldTour1 from '../assets/images/IMG-20250205-WA0003.jpg';
import goldTour2 from '../assets/images/IMG-20250205-WA0004.jpg';
import goldTour3 from '../assets/images/IMG-20250205-WA0005.jpg';

import nightWalk1 from '../assets/images/IMG-20250205-WA0006.jpg';
import nightWalk2 from '../assets/images/IMG-20250205-WA0007.jpg';
import nightWalk3 from '../assets/images/IMG-20250205-WA0008.jpg';

import saltoHike1 from '../assets/images/IMG-20250205-WA0009.jpg';
import saltoHike2 from '../assets/images/IMG-20250205-WA0010.jpg';
import saltoHike3 from '../assets/images/IMG-20250205-WA0011.jpg';

import rainforestHike1 from '../assets/images/IMG-20250205-WA0015.jpg';
import rainforestHike2 from '../assets/images/IMG-20250205-WA0016.jpg';
import rainforestHike3 from '../assets/images/IMG-20250205-WA0017.jpg';

import birdWatching1 from '../assets/images/IMG-20250205-WA0018.jpg';
import birdWatching2 from '../assets/images/IMG-20250205-WA0019.jpg';
import birdWatching3 from '../assets/images/IMG-20250205-WA0020.jpg';

import corcovado1 from '../assets/images/IMG-20250205-WA0021.jpg';
import corcovado2 from '../assets/images/IMG-20250205-WA0022.jpg';
import corcovado3 from '../assets/images/IMG-20250205-WA0023.jpg';

import oneDayHike1 from '../assets/images/IMG-20250205-WA0024.jpg';
import oneDayHike2 from '../assets/images/IMG-20250205-WA0025.jpg';
import oneDayHike3 from '../assets/images/IMG-20250205-WA0026.jpg';


const tours = [
  {
    title: "Bird Watching Tour",
    duration: "3 hours",
    price: 45,
    description: "Enjoy bird watching in one of the most bio-diverse areas of the world. Here on the Osa Peninsula, you will have the chance to see many species of birds.",
    level: "Easy",
    images: [birdWatching1, birdWatching2, birdWatching3]
  },
  {
    title: "Gold Tour",
    duration: "3 hours",
    price: 45,
    description: "Learn about the local communities gold mining history and activities through a locally guided tour. On this tour you will traverse mild terrain and even have a chance to pan for gold.",
    level: "Mild",
    images: [goldTour1, goldTour2, goldTour3]
  },
  {
    title: "Night Walk",
    duration: "3 hours",
    price: 45,
    description: "The nocturnal wildlife is waiting for you in the jungle. This night walk will show you the various animals which are usually only active at night.",
    level: "Moderate",
    images: [nightWalk1, nightWalk2, nightWalk3]
  },
  {
    title: "The Salto Hike",
    duration: "3 hours",
    price: 45,
    description: "A relaxing hike to a natural river pool to enjoy the natural flora and fauna along the way.",
    level: "Mild",
    images: [saltoHike1, saltoHike2, saltoHike3]
  },
  {
    title: "Rainforest Hike",
    duration: "4 hours",
    price: 55,
    description: "The rainforest calls you to experience a wonderful hike. This is a short hike through the forest to enjoy the environment.",
    level: "Moderate",
    images: [rainforestHike1, rainforestHike2, rainforestHike3]
  },
  {
    title: "Corcovado One Day Tour",
    subtitle: "El Tigre Sector",
    duration: "7 hours",
    price: "112",
    price_second: "78",
    description: "Quick access to Corcovado National Park with spectacular views of Golfo Dulce. Includes guided trail through primary forest, naturalist guide and entrance fees. Optional lunch ($8).",
    level: "High",
    images: [corcovado1, corcovado2, corcovado3]
  },
  {
    title: "One Day Rainforest Hike",
    duration: "6 hours",
    price: 60,
    description: "A long rainforest hike enjoying the beautiful scenery through the primary forest with river crossings on the return hike.",
    level: "High",
    images: [oneDayHike1, oneDayHike2, oneDayHike3]
  }
];

export default tours;
