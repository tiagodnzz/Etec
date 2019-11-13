#include<stdlib.h>
#include<stdio.h>
#include<windows.h>
#include<locale.h>
int main(){
	int i,soma=0;
		setlocale(LC_ALL, "portuguese");
			for(i=1;i<=40;i++){
				if(i%4==0){
					printf("\n Pi \n");
						Beep(1000,500);	
						Beep(5000,500);
						Beep(8000,500);
						Beep(9000,500);
						Beep(200,500);
					}
						else{
					printf("\n %i \n",i);
							}					
					}
				
						printf("\n o resultado da soma=%i\n",soma);
							system("pause");
}
