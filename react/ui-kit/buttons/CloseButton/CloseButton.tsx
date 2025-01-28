import React, { ReactNode } from 'react';
import cn from 'classnames';
import { getIconBtnStyle, getIconBtnCurveStyle } from 'src/helpers';
import { CloseIcon } from 'src/assets/icons';

type IconButtonProps = {
  icon?: ReactNode;
  btnKind?: 'sm' | 'lg' | 'xl';
  type?: 'submit' | 'reset' | 'button' | undefined;
  onClick?: () => void;
  className?: string;
};

export const CloseButton: React.FC<IconButtonProps> = ({
  icon = <CloseIcon />,
  btnKind = 'sm',
  type = 'button',
  onClick,
  className,
}): JSX.Element => {
  const btnStyles = getIconBtnStyle(btnKind);
  const curveStyle = getIconBtnCurveStyle(btnKind);

  return (
    <button
      type={type}
      onClick={onClick}
      className={cn(
        'group flex items-center justify-center bg-no-repeat bg-cover hover:bg-cutted-hover-btn transition-all',
        btnStyles,
        className
      )}
    >
      {icon}
      <div
        className={cn(
          'absolute bg-no-repeat bg-cover bg-right group-hover:bg-cutted-hover-btn transition-all',
          curveStyle
        )}
      />
    </button>
  );
};
