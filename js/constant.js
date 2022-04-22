let categoriesMap = document.getElementById('map-categories');
let categoriesImg = document.getElementById('categories');

let frozenFoodMap = document.getElementById('map-frozen-food');
let frozenFoodImg = document.getElementById('frozen-food');

let freshFoodMap = document.getElementById('map-fresh-food');
let freshFoodImg = document.getElementById('fresh-food');

let beveragesMap = document.getElementById('map-beverages');
let beveragesImg = document.getElementById('beverages');

let homeHealthMap = document.getElementById('map-home-health');
let homeHealthImg = document.getElementById('home-health');

let petFoodMap = document.getElementById('map-pet-food');
let petFoodImg = document.getElementById('pet-food');

let categoriesScale = new ImageMap(categoriesMap, categoriesImg);
let frozenFoodScale = new ImageMap(frozenFoodMap, frozenFoodImg);
let freshFoodScale = new ImageMap(freshFoodMap, freshFoodImg);
let beveragesScale = new ImageMap(beveragesMap, beveragesImg);
let homeHealthScale = new ImageMap(homeHealthMap, homeHealthImg);
let petFoodScale = new ImageMap(petFoodMap, petFoodImg);

const addItemErrorMsg = {
  negative: {
    msg: "input value cannot be negative",
  },
  overLimit: {
    msg: "input cannot exceed stock amount"
  },
  invalidNumber: {
    msg: "input cannot contains letters or special characters"
  },
  default: {
    msg: "input cannot be empty"
  }
}
