#include<stdlib.h>
#include<stdio.h>
#include<windows.h>
#include<locale.h>
int main(){
	int i,soma;
		setlocale(LC_ALL, "portuguese");
			printf("\n Repetição-laço \n");
				for(i=1;i<=100;i++){
				if(i%2==0){				
			printf("\n %i\n",i);
					soma=soma+i;
						  }		
				Sleep(500);
									}
					system("pause");
			}
