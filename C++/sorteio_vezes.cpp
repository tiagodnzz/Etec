#include<stdio.h>
#include<stdlib.h>
#include<windows.h>
#include<locale.h>
#include<time.h>
	int main (){
		setlocale(LC_ALL,"portuguese");
	int i,x,soma1=0,soma2=0,soma3=0,soma4=0,soma5=0,soma6=0;
		srand((unsigned)time(NULL));
			i=1;
				while(i<=10){
					x=1+rand()%6;
					printf("\n%i\n",x);
					i++;
						if(x==1){
							soma1=soma1+1;
								}
						if(x==2){
							soma2=soma2+1;
								}
						if(x==3){
							soma3=soma3+1;
								}
						if(x==4){
							soma4=soma4+1;
								}
						if(x==5){
							soma5=soma5+1;	
								}
						if(x==6){
							soma6=soma6+1;	
						}
				}
				printf("\n o numero 1 foi sorteio %i vezes \n",soma1);
				printf("\n o numero 2 foi sorteio %i vezes \n",soma2);
				printf("\n o numero 3 foi sorteio %i vezes \n",soma3);
				printf("\n o numero 4 foi sorteio %i vezes \n",soma4);
				printf("\n o numero 5 foi sorteio %i vezes \n",soma5);
				printf("\n o numero 6 foi sorteio %i vezes \n",soma6);
}
