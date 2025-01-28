import React, { ReactNode } from 'react';
import cn from 'classnames';
import { BtnKindsEnum, BtnPositionsEnum } from 'src/constants';
import { ButtonText } from 'src/ui-kit/typography';
import { HelpIcon } from 'src/assets/icons';

type ButtonProps = {
  title?: string;
  icon?: ReactNode;
  type?: 'submit' | 'reset' | 'button' | undefined;
  btnKind?: 'sm' | 'lg';
  onClick?: () => void;
  iconPosition?: 'left' | 'right';
  className?: string;
};

export const HelpButton: React.FC<ButtonProps> = ({
  title,
  icon = <HelpIcon />,
  type = 'button',
  btnKind = BtnKindsEnum.SMALL,
  onClick,
  iconPosition,
  className,
}): JSX.Element => {
  const isLgBtn = btnKind === BtnKindsEnum.LARGE;
  const isLeftIcon = iconPosition === BtnPositionsEnum.LEFT;
  const isRightIcon = iconPosition === BtnPositionsEnum.RIGHT;
  const btnStyles = isLgBtn ? 'h-[60px]' : 'h-[47px]';
  const btnTextStyles = isLgBtn ? 'text-x2' : 'text-btn';

  return (
    <button
      type={type}
      onClick={onClick}
      className={cn(
        'group relative max-w-fit pl-[20px] pr-[5px] mr-[15px] flex items-center bg-no-repeat bg-cover bg-cutted-btn hover:bg-cutted-hover-btn transition-all !duration-[350ms]',
        btnStyles,
        className
      )}
    >
      {isLeftIcon && icon && (
        <div className="group-hover:mr-2.5 transition-all !duration-[350ms]">
          {icon}
        </div>
      )}
      {title && (
        <ButtonText
          title={title}
          className={cn('text-grey hidden group-hover:block', btnTextStyles)}
        />
      )}
      {isRightIcon && icon && <div className="ml-2.5">{icon}</div>}
      <div
        className={cn(
          'absolute w-[15px] right-[-15px] bg-no-repeat bg-cover bg-right bg-cutted-btn group-hover:bg-cutted-hover-btn transition-all !duration-[350ms]',
          btnStyles
        )}
      />
    </button>
  );
};
