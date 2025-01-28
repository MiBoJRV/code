import React, { ReactNode } from 'react';
import cn from 'classnames';
import { getIconBtnStyle, getIconBtnCurveStyle } from 'src/helpers';
import { AttachIcon } from 'src/assets/icons';

type IconButtonProps = {
  icon?: ReactNode;
  btnKind?: 'sm' | 'lg' | 'xl';
  type?: 'submit' | 'reset' | 'button' | undefined;
  position?: string;
  onClick?: () => void;
  className?: string;
  iconClassName?: string;
};

export const IconButton: React.FC<IconButtonProps> = ({
  icon = <AttachIcon />,
  btnKind = 'sm',
  type = 'button',
  position = 'relative',
  onClick,
  className = '',
  iconClassName = '',
}): JSX.Element => {
  const btnStyles = getIconBtnStyle(btnKind);
  const curveStyle = getIconBtnCurveStyle(btnKind);

  return (
    <button
      type={type}
      onClick={onClick}
      className={cn(
        `group ${position} mr-2 flex items-center justify-center !bg-no-repeat !bg-cover bg-cutted-btn hover:bg-cutted-hover-btn focus-within:bg-cutted-btn transition-all`,
        btnStyles,
        className
      )}
    >
      <div className={iconClassName}>{icon}</div>
      <div
        className={cn(
          'absolute bg-no-repeat bg-cover bg-right bg-cutted-btn group-hover:bg-cutted-hover-btn group-focus-within:bg-cutted-btn  transition-all',
          curveStyle
        )}
      />
    </button>
  );
};
