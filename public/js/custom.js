function prepareDismissModal(heroId, heroName, heroPhoto){
    var appeals = [
        "We've been through so many things together, now do want to dismiss me !?"
        ,   "Boss! Come on! Don''t do this.."
        ,   "It was a great honor to serve you Master!"
        ,   "I've known that I wasn't giving my best...but give me another chance!"        
    ]
    
    $('#heroImage').html("<img style='max-width: 100px;' src='"+heroPhoto+"'/>");
    
    $('#heroAppeal').html(            
            "<h5>"+heroName+":</h5>"+
            appeals[getRandomInt(0,3)]
            );
    $('#finalQuestion').html( "Do you <b>Really</b> want to dismiss <b>"+heroName+"</b>?");    
    
    $('#dismissButton').data("id", heroId);    
    
}

function dismissHero(heroId){
    $('#heroForm'+heroId).submit();    
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}