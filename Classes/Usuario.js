class  Usuario{
    constructor(context, teclado){
        this.context = context;
        this.teclado = teclado;
        this.x = 50;
        this.y = 50;
        this. vel = 3;
        this.width = 50;
        this.height = 50;
    }
  
    gerenciar(){
        if(this.teclado.esquerda){
            if(this.x > 0)
                this.x -= this.vel;
                 
        }
        if(this.teclado.direita){
            if(this.x < (this.context.canvas.width) - this.height)
                this.x+=this.vel;
        }
        if(this.teclado.cima){
            if(this.y > 0)
                this.y -=this.vel;
        }
        if(this.teclado.baixo){
            if(this.y < this.context.canvas.height - this.width)
                this.y +=this.vel;
        }
    }
    criarJogador(){
        var context = this.context;
        context.clearRect(0, 0, 1500, 600);
        this.gerenciar();
       
        context.fillStyle = 'red';
        context.fillRect(this.x, this.y, this.width, this.height);
        
    }
   
}