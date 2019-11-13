#include<stdio.h>
#include<stdlib.h>
#include<locale.h>
#include<windows.h>
int main(){
	int i,soma=0;
	i=1;
		while(i<=10){
				printf("\n %i \n",i);			
			soma=soma+i;
				i++;		
			Beep(1500,1000);
		}
				printf("\n o resultado da soma=%i\n",soma);
}
